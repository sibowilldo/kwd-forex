<?php

namespace App\Jobs;

use App\Booking;
use App\Mail\BookingAttachmentUploadedAdminEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Mail;
use App\User;
use Storage;


class SendAttachmentUploadedAdminEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $booking;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    /**
     * Execute the job.
     *
     *
     * @return void
     */
    public function handle()
    {
        $email = config('app.infomail');
        Mail::to($email)->send(new BookingAttachmentUploadedAdminEmail($this->booking));
    }
}
