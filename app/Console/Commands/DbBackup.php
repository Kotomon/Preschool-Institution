<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use Carbon\Carbon;

class DbBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Database Backup';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $filename = "backup-" . Carbon::now()->format('Y-m-d') . ".php";
        $command = "mysqldump --user="
            . env('DB_USERNAME') . " --password="
            . env('DB_PASSWORD') . " --host="
            . env('DB_HOST') . " "
            . env('DB_DATABASE') . "  | php > "
            . storage_path() . "/app/backup/"
            . $filename;
        exec($command);
    }

}