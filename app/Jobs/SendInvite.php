<?php

namespace App\Jobs;

use App\Team;
use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendInvite extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $email;
    protected $slug;
    protected $token;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email, $slug)
    {
        $this->email = $email;
        $this->slug = $slug;
        $this->token = $this->get_token($slug);
    }

    protected function get_token($slug)
    {
        $team = Team::where('slug', $slug)->first();
        return $team->token;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $fields = [
            'email'      => $this->email,
            'token'      => $this->token,
            'set_active' => 'true'
        ];

        $url        = 'https://' . $this->slug . '.slack.com/api/users.admin.invite';

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
    }
}
