class NewsLoader{  public function __construct(GoogleNewsService $newsService, Logger $logger )  {    $this->newsService = $newsService;    $this->logger = $logger;  }  public function fetchNews( $offset = 0, $limit = null )  {    // ...    $this->logger->log( 'Fetched news.' );    // ...    $this->logger->writeToFile();  }}