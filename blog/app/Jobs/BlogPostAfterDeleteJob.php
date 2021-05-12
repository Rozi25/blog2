/**
* @var int
*/
private $blogPostId;

/**
* Create a new job instance.
*
* @param int $blogPostId
*
* @return void
*/
public function __construct($blogPostId)
{
$this->blogPostId = $blogPostId;
}

/**
* Execute the job.
*
* @return void
*/
public function handle()
{
logs()->warning("Видалено запис в блозі [{$this->blogPostId}]");
}
