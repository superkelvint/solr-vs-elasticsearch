<?php 
$page_title="Apache Solr vs Elasticsearch - the Feature Smackdown!";
include_once("inc/header.php");
?>

<div class="container">
  <div class="jumbotron subhead">
      <h1 class="secthead" style="margin-top:-10px;margin-bottom:-5px">Apache Solr vs Elasticsearch</h1><h3 class="secthead">The Feature Smackdown</h3>
  </div>
  
</div>
<hr/>   
<div class="container">
<h2 class="secthead">API</h2>
  <table class="table table-striped table-bordered table-hover">
    <thead><tr>
    <th width="20%">Feature</th>
    <th width="40%"><?=$solr_version;?></th>
    <th width="40%"><?=$es_version;?></th></tr>
    </thead>
    <tbody>
    <tr>
      <td>Format</td>
      <td>XML,CSV,JSON</td>
      <td>JSON</td>
    </tr>  
    <tr>
      <td>HTTP REST API</td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>  
    <tr>
      <td>Binary API <a href="#" title="A binary API is likely to be a more efficient for large data." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"> SolrJ</td>
      <td><img src="img/tick.png"> TransportClient, Thrift (through a <a href="https://github.com/elasticsearch/elasticsearch-transport-thrift">plugin</a>)</td>
    </tr>
    <tr>
      <td>JMX support</td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/cross.png"> ES specific stats are exposed through the REST API</td>
    </tr>
    <tr>
      <td>Official client libraries <a href="#" title="Actively-maintained official client libraries in various languages." class="tt"><img src="img/help.png"></a></td>
      <td>Java</td>
      <td>Java, Groovy, PHP, Ruby, Perl, Python, .NET, Javascript <a href="https://www.elastic.co/guide/en/elasticsearch/client/index.html">Official list of clients</a></td>
    </tr>
    <tr>
      <td>Community client libraries <a href="#" title="Community-maintained client libraries in various languages." class="tt"><img src="img/help.png"></a></td>
      <td>PHP, Ruby, Perl, Scala, Python, .NET, Javascript, Go, Erlang, Clojure</td>
      <td>Clojure, Cold Fusion, Erlang, Go, Groovy, Haskell, Java, JavaScript, .NET, OCaml, Perl, PHP, Python, R, Ruby, Scala, Smalltalk, Vert.x <a href="https://www.elastic.co/guide/en/elasticsearch/client/community/current/index.html">Complete list</a></td>
    </tr>
    <tr>
      <td>3rd-party product integration (open-source)<a href="#" title="3rd-party open-source products which use Solr/ES to provide search functionality." class="tt"><img src="img/help.png"></a></td>
      <td>Drupal, Magento, Django, ColdFusion, Wordpress, OpenCMS, Plone, Typo3, ez Publish, Symfony2, Riak (via Yokozuna)</td>
      <td>Drupal, Django, Symfony2, Wordpress, CouchBase</td>
    </tr>
    <tr>
      <td>3rd-party product integration (commercial)<a href="#" title="3rd-party commercial products which use Solr/ES to provide search functionality." class="tt"><img src="img/help.png"></a></td>
      <td>DataStax Enterprise Search, Cloudera Search, Hortonworks Data Platform, MapR</td>
      <td>SearchBlox, Hortonworks Data Platform, MapR etc <a href="https://www.elastic.co/guide/en/elasticsearch/plugins/current/integrations.html">Complete list</a></td>
    </tr>
    <tr>
      <td>Output<a href="#" title="Output formats" class="tt"><img src="img/help.png"></a></td>
      <td>JSON, XML, PHP, Python, Ruby, CSV, Velocity, XSLT, native Java</td>
      <td>JSON, XML/HTML (via <a href="http://blog.zenika.com/index.php?post/2012/12/20/Introducing-the-Elasticsearch-View-Plugin">plugin</a>)</td>
    </tr>
    </tbody>
  </table>
  <br/>
  <h2 class="secthead">Infrastructure</h2>
  <table class="table table-striped table-bordered table-hover">
    <thead><tr>
    <th width="20%">Feature</th>
    <th width="40%"><?=$solr_version;?></th>
    <th width="40%"><?=$es_version;?></th></tr>
    </thead>
    <tbody> 
    <tr>
      <td>Master-slave replication</td>
      <td><img src="img/tick.png"> <b>Only in non-SolrCloud.</b> In SolrCloud, behaves identically to ES.</td>
      <td><img src="img/cross.png"> Not an issue because shards are replicated across nodes.</td>
    </tr>
    <tr>
      <td>Integrated snapshot and restore</td>
      <td>Filesystem</td>
      <td>Filesystem, AWS Cloud Plugin for S3 repositories, HDFS Plugin for Hadoop environments, Azure Cloud Plugin for Azure storage repositories</td>
    </tr>
  </tbody>
  </table>
  <br/>
  <h2 class="secthead">Indexing</h2>
  <table class="table table-striped table-bordered table-hover">
    <thead><tr>
    <th width="20%">Feature</th>
    <th width="40%"><?=$solr_version;?></th>
    <th width="40%"><?=$es_version;?></th></tr>
    </thead>
    <tbody> 
    <tr>
      <td>Data Import</td>
      <td>DataImportHandler - JDBC, CSV, XML, Tika, URL, Flat File</td>
      <td><font color=maroon>[DEPRECATED in 2.x]</font> Rivers modules - ActiveMQ, Amazon SQS, CouchDB, Dropbox, DynamoDB, FileSystem, Git, GitHub, Hazelcast, JDBC, JMS, Kafka, LDAP, MongoDB, neo4j, OAI, RabbitMQ, Redis, RSS, Sofa, Solr, St9, Subversion, Twitter, Wikipedia</td>
    </tr>
    <tr>
      <td>ID field for updates and deduplication</td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>
		<tr>
      <td>DocValues <a href="#" title="Disk-based field data. Replacement for FieldCache" class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>  
    <tr>
      <td>Partial Doc Updates <a href="#" title="Partial document updates allow you to update a document by sending just the fields that have changed. <p>This makes it more similar to SQL update statements.</p>" class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"> with stored fields</td>
      <td><img src="img/tick.png"> with _source field</td>
    </tr>
    <tr>
      <td>Custom Analyzers and Tokenizers <a href="#" title="Analyzers and Tokenizers are what break up text into terms, or tokens, which are then indexed for searching." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>  
    <tr>
      <td>Per-field analyzer chain <a href="#" title="You can specify a sequence of analyzers/tokenizers on a per-field basis." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>  
    <tr>
      <td>Per-doc/query analyzer chain <a href="#" title="You can specify a sequence of analyzers/tokenizers on a per-document or per-query basis." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/cross.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>  
    <tr>
      <td>Synonyms <a href="#" title="You can specify synonyms at index- or query-time, either through term expansion, or term substitution." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"> Supports Solr and Wordnet synonym format</td>
    </tr>  
    <tr>
      <td>Multiple indexes <a href="#" title="Lucene stores documents in an index. This feature allows you to manage multiple indices from a single installation. The RDBMS-equivalent of an index is a database." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>  
    <tr>
      <td>Near-Realtime Search/Indexing <a href="#" title="Near-Realtime search means thats documents are available for search almost immediately after being indexed - additions and updates to documents are seen in 'near' realtime." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>  
    <tr>
      <td>Complex documents <a href="#" title="Parent-child relationship between documents is supported. You can nest documents, rather than having to flatten documents." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>
    <tr>
      <td>Schemaless <a href="#" title="A mode that requires no up-front schema modifications, in which previously unknown fields' types are guessed based on the values in added/updated documents, and are then added to the schema prior to processing the update." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"> 4.4+</td>
      <td><img src="img/tick.png"> </td>
    </tr>  
    <tr>
      <td>Multiple document types per schema <a href="#" title="The RDBMS-equivalent of a schema is a database. <br/>A database table is a collection of fields.<br/> Having multiple doc types per schema is akin to having multiple tables per database." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/cross.png"> One set of fields per schema, one schema per core</td>
      <td><img src="img/tick.png"></td>
    </tr>  
    <tr>
      <td>Online schema changes <a href="#" title="Can changes to the schema be made without restarting the server?" class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"> Schemaless mode or via dynamic fields.</td>
      <td><img src="img/tick.png"> Only backward-compatible changes.</td>
    </tr>  
    <tr>
      <td>Apache Tika integration <a href="#" title="Apache Tika is a Java library which supports full-text extraction from binary files such as PDF, MS Word etc" class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>
    <tr>
      <td>Dynamic fields <a href="#" title="Dynamic fields are field definitions which support wildcard matching. e.g. book_* matches all field names starting with book_" class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>
    <tr>
      <td>Field copying <a href="#" title="Field copying is useful where you need multiple versions of a field indexed differently, e.g. a stemmed and an unstemmed version of a field." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"> via multi-fields</td>
    </tr>
    <tr>
      <td>Hash-based deduplication <a href="#" title="Determining the uniqueness of a document not based on an ID-field, but the hash signature of a field. Useful for web pages for example, where the URL may be different but the content the same." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"> <a href="https://www.elastic.co/guide/en/elasticsearch/plugins/current/mapper-murmur3.html">Murmur plugin</a> or <a href="https://github.com/YannBrrd/elasticsearch-entity-resolution">ER plugin</a></td>
    </tr>
    </tbody>  
  </table>
  <br/>
  <h2 class="secthead">Searching</h2>
  <table class="table table-striped table-bordered table-hover">
    <thead><tr>
    <th width="20%">Feature</th>
    <th width="40%"><?=$solr_version;?></th>
    <th width="40%"><?=$es_version;?></th></tr>
    </thead>
    <tbody>
    <tr>
      <td>Lucene Query parsing <a href="#" title="Lucene provides a string-based query syntax for performing searches. This is adequate for most instances, but may come up short for more complex queries." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>
    <tr>
      <td>Structured Query DSL <a href="#" title="A Domain-Specific Language which allows you to build complex queries not otherwise possible with just a Lucene query string." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/cross.png"> Need to programmatically create queries if going beyond Lucene query syntax.</td>
      <td><img src="img/tick.png"></td>
    </tr> 
    <tr>
      <td>Span queries <a href="#" title="SpanQueries allow for nested, positional restrictions when matching documents in Lucene. They're kind of like phrase queries, but much more expressive." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"> via <a href="https://issues.apache.org/jira/browse/SOLR-2703">SOLR-2703</a></td>
      <td><img src="img/tick.png"></td>
    </tr>    
    <tr>
      <td>Spatial/geo search <a href="#" title="Searching for documents by latitude/longitude." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>
    <tr>
      <td>Multi-point spatial search <a href="#" title="An advanced spatial search feature which allows for each document to possess more than one spatial point. A good example is an index where documents are companies, which may have more than one physical office." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>  
    <tr>
      <td>Faceting <a href="#" title="Faceting allows for efficient computation of doc counts by facets. An example of facets may be 'Category', 'Price' or 'Shipping Method'." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"> Top N term accuracy can be controlled with <a href="https://www.elastic.co/guide/en/elasticsearch/reference/2.1/search-aggregations-bucket-terms-aggregation.html#_shard_size_2">shard_size</a> </td>
    </tr>
    <tr>
      <td>Advanced Faceting <a href="#" title="Advanced operations such as hierarchical faceting, metrics and bucketing" class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"> <a href="http://yonik.com/json-facet-api/">New JSON faceting API</a></td>
      <td><img src="img/tick.png"> <a href="http://www.elasticsearch.org/blog/data-visualization-elasticsearch-aggregations" rel="nofollow">blog post</a></td>
    </tr>
    <tr>
      <td>Geo-distance Faceting </td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>    
    <tr>
      <td>Pivot Facets <a href="#" title="A pivot facet, aka decision tree, is a multi-level facet across multiple fields. e.g. pivoting on price than category returns category facet counts for each price facet." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>   
    <tr>
      <td>More Like This</td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>
    <tr>
      <td>Boosting by functions <a href="#" title="Modify document scores through pre-built or custom function classes." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>  
    <tr>
      <td>Boosting using scripting languages <a href="#" title="Modify document scores through custom code written in a scripting language like Javascript." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/cross.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>        
    <tr>
      <td>Push Queries <a href="#" title="Think of push queries as the reverse operation of indexing and then searching. Instead of sending docs, indexing them, and then running queries. One sends queries, registers them, and then sends docs and finds out which queries match that doc." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/cross.png"><a href="https://issues.apache.org/jira/browse/SOLR-4587">JIRA issue</td>
      <td><img src="img/tick.png"> Percolation. Distributed percolation supported in 1.0</td>
    </tr>
    <tr>
      <td>Field collapsing/Results grouping <a href="#" title="Field Collapsing collapses a group of results with the same field value down to a single (or fixed number) of entries. For example, most search engines such as Google collapse on site so only one or two entries are shown, along with a link to click to see more results from that site." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>
    <tr>
      <td>Spellcheck</td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"> <a href="http://www.elasticsearch.org/guide/reference/api/search/suggest/">Suggest API</a></td>
    </tr>
    <tr>
      <td>Autocomplete</td>
      <td><img src="img/tick.png"> </td>
      <td><img src="img/tick.png"> </td>
    </tr>
    <tr>
      <td>Query elevation  <a href="#" title="Query elevation enables you to configure the top results for a given query regardless of the normal lucene scoring. This is sometimes called 'sponsored search', 'editorial boosting' or 'best bets'." class="tt"><img src="img/help.png"></a> </td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"><a href="https://github.com/elasticsearch/elasticsearch/issues/1066#issuecomment-8625739">workaround</a></td>
    </tr>
    <tr>
      <td>Joins <a href="#" title="A method of searching on inter-document relationships, just like SQL joins." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"> Joined index has to be single-shard and replicated across all nodes.</td>
      <td><img src="img/tick.png"> via <i>has_children</i> and <i>top_children</i> queries</td>
    </tr>  
    <tr>
      <td>Resultset Scrolling <a href="#" title="Efficient scrolling/paging of large result sets" class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"> New to 4.7.0</td>
      <td><img src="img/tick.png"> via <i>scan</i> search type</td>
    </tr>  
    <tr>
      <td>Filter queries <a href="#" title="Cached queries which only limit the set of document results and do not affect doc score." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"> also supports filtering by native scripts</td>
    </tr>  
    <tr>
      <td>Filter execution order <a href="#" title="The ability to specify when a filter query is expensive and thus should run last, on the smallest document set possible." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"> local params and <i>cache</i> property</td>
      <td><img src="img/tick.png"></td>
    </tr>
    <tr>
      <td>Alternative QueryParsers <a href="#" title="An example of an alternative QueryParser is Solr's DisjunctionMaxQueryParser." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"> DisMax, eDisMax</td>
      <td><img src="img/tick.png"> query_string, dis_max, match, multi_match etc</td>
    </tr>
    <tr>
      <td>Negative boosting <a href="#" title="Reducing the score of certain documents which match a query." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"> but awkward. Involves positively boosting the inverse set of negatively-boosted documents.</td>
      <td><img src="img/tick.png"></td>
    </tr> 
    <tr>
      <td>Search across multiple indexes</td>
      <td><img src="img/tick.png"> it can search across multiple compatible collections</td>
      <td><img src="img/tick.png"></td>
    </tr> 
    <tr>
      <td>Result highlighting</td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>  
    <tr>
      <td>Custom Similarity <a href="#" title="Lucene's Similarity class provides a way to customize some variables used in calculating document scores." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>
    <tr>
      <td>Searcher warming on index reload <a href="#" title="When an index is changed, Searchers need to be reloaded. All existing FieldCaches are refreshed. By warming Searchers with queries before making them live, you avoid the instance where the first search is always a slow one." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"> <a href="http://www.elasticsearch.org/guide/reference/api/admin-indices-warmers/">Warmers API</a></td>
    </tr>
    <tr>
      <td>Term Vectors API</td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr> 
    <!--       
    
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr> 
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>  
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    -->
    </tbody>  
  </table>
   <br/>
  <h2 class="secthead">Customizability</h2>
  <table class="table table-striped table-bordered table-hover">
    <thead><tr>
    <th width="20%">Feature</th>
    <th width="40%"><?=$solr_version;?></th>
    <th width="40%"><?=$es_version;?></th></tr>
    </thead>
    <tbody>
    <tr>
      <td>Pluggable API endpoints <a href="#" title="You can define new API endpoints." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>
    <tr>
      <td>Pluggable search workflow <a href="#" title="You can modify the workflow of existing API endpoints." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"> via SearchComponents</td>
      <td><img src="img/cross.png"></td>
    </tr>
    <tr>
      <td>Pluggable update workflow <a href="#" title="You can modify the workflow of document inserts and updates." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/cross.png"></td>
    </tr> 
    <tr>
      <td>Pluggable Analyzers/Tokenizers</td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>  
    <tr>
      <td>Pluggable Field Types</td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>
    <tr>
      <td>Pluggable Function queries</td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>        
    <tr>
      <td>Pluggable scoring scripts</td>
      <td><img src="img/cross.png"></td>
      <td><img src="img/tick.png"></td>
    </tr> 
    
    <tr>
      <td>Pluggable hashing <a href="#" title="See Hash-based deduplication above" class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr> 
    
    <tr>
      <td>Pluggable webapps <a href="#" title="Webapps integrated with the application" class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/cross.png"></td>
      <td><img src="img/tick.png"> site plugin</td>
    </tr>
    
     <tr>
      <td>Automated plugin installation <a href="#" title="Can plugins be installed via some kind of manager?" class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/cross.png"></td>
      <td><img src="img/tick.png"> Installable from GitHub, maven, sonatype or elasticsearch.org</td>
    </tr>            
    <!--
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    -->
    </tbody>  
  </table>

  <br/>
  <h2 class="secthead">Distributed</h2>
  <table class="table table-striped table-bordered table-hover">
    <thead><tr>
    <th width="20%">Feature</th>
    <th width="40%"><?=$solr_version;?></th>
    <th width="40%"><?=$es_version;?></th></tr>
    </thead>
    <tbody>
    <tr>
      <td>Self-contained cluster <a href="#" title="Does the cluster depend on any other servers, or is it self-contained?" class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/cross.png"> Depends on separate ZooKeeper server</td>
      <td><img src="img/tick.png"> Only Elasticsearch nodes</td>
    </tr>
    <tr>
      <td>Automatic node discovery</td>
      <td><img src="img/tick.png"> ZooKeeper</td>
      <td><img src="img/tick.png"> internal Zen Discovery or ZooKeeper</td>
    </tr>
    <tr>
      <td>Partition tolerance</td>
      <td><img src="img/tick.png"> The partition without a ZooKeeper quorum will stop accepting indexing requests or cluster state changes, while the partition with a quorum continues to function.</td>
      <td><img src="img/cross.png"> Partitioned clusters can diverge unless discovery.zen.minimum_master_nodes set to at least N/2+1, where N is the size of the cluster.  If configured correctly, the partition without a quorum will stop operating, while the other continues to work. See <a href="http://elasticsearch-users.115913.n3.nabble.com/Split-brain-td3620149.html">this</a></td>
    </tr>
    <tr>
      <td>Automatic failover</td>
      <td><img src="img/tick.png"> If all nodes storing a shard and its replicas fail, client requests will fail, unless requests are made with the shards.tolerant=true parameter, in which case partial results are retuned from the available shards.</td>
      <td><img src="img/tick.png"></td>
    </tr>
    <tr>
      <td>Automatic leader election</td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>
    <tr>
      <td>Shard replication</td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>       
    <tr>
      <td>Sharding <a href="#" title="A shard is a subset of an index stored on a node." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"></td>
    </tr>  
    <tr>
      <td>Automatic shard rebalancing <a href="#" title="Shards are automatically rebalanced to adhere to the desired replication factor." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/cross.png"></td>
      <td><img src="img/tick.png"> it can be machine, rack, availability zone, and/or data center aware.  Arbitrary tags can be assigned to nodes and it can be configured to not assign the same shard and its replicates on a node with the same tags.</td>
    </tr> 
    <tr>
      <td>Change # of shards</td>
      <td><img src="img/tick.png"> Shards can be added (when using implicit routing) or split (when using compositeId).  Cannot be lowered.  Replicas can be increased anytime.</td>
      <td><img src="img/cross.png"> each index has 5 shards by default. Number of primary shards cannot be changed once the index is created. Replicas can be increased anytime.</td>
    </tr> 
    <tr>
      <td>Shard splitting</td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/cross.png"></td>
    </tr> 
    <tr>
      <td>Relocate shards and replicas <a href="#" title="Move shards and replicas within a cluster" class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"> can be done by creating a shard replicate on the desired node and then removing the shard from the source node</td>
      <td><img src="img/tick.png"> can move shards and replicas to any node in the cluster on demand</td>
    </tr>  
    <tr>
      <td>Control shard routing <a href="#" title="Control which shard a search request gets routed to" class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"> <i>shards</i> or <i>_route_</i> parameter</td>
      <td><img src="img/tick.png"> <i>routing</i> parameter</td>
    </tr> 
    <tr>
      <td>Pluggable shard/replica assignment </td>
      <td><img src="img/tick.png"> <a href="https://cwiki.apache.org/confluence/display/solr/Rule-based+Replica+Placement">Rule-based replica assignment</a></td>
      <td><img src="img/cross.png"> Partially-supported with <a href="https://github.com/datarank/tempest">Tempest plugin</a></td>
    </tr> 
    <tr>
      <td>Consistency</td>
      <td>Indexing requests are synchronous with replication. A indexing request won't return until all replicas respond.  No check for downed replicas.  They will catch up when they recover. When new replicas are added, they won't start accepting and responding to requests until they are finished replicating the index.</td>
      <td>Replication between nodes is synchronous by default, thus ES is consistent by default, but it can be set to asynchronous on a per document indexing basis. Index writes can be configured to fail is there are not sufficient active shard replicas.  The default is quorum, but all or one are also available.</td>
    </tr> 
    <!-- 
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    -->    
        </tbody>  
  </table>

  <br/>
  <h2 class="secthead">Misc</h2>
  <table class="table table-striped table-bordered table-hover">
    <thead><tr>
    <th width="20%">Feature</th>
    <th width="40%"><?=$solr_version;?></th>
    <th width="40%"><?=$es_version;?></th></tr>
    </thead>
    <tbody>
    <tr>
      <td>Web Admin interface </td>
      <td><img src="img/tick.png"> bundled with Solr</td>
      <td><img src="img/tick.png"> Marvel and via site plugins: <a href="https://github.com/mobz/elasticsearch-head‎" rel="nofollow">elasticsearch-head</a>, <a href="http://bigdesk.org" rel="nofollow">bigdesk</a>, <a href="https://github.com/lmenezes/elasticsearch-kopf" rel="nofollow">kopf</a>, <a href="https://github.com/royrusso/elasticsearch-HQ" rel="nofollow">elasticsearch-HQ</a>, <a href="https://github.com/andrewvc/elastic-hammer" rel="nofollow">Hammer</a></td>
    </tr>
    <tr>
      <td>Visualisation</td>
      <td><a href="https://github.com/LucidWorks/banana" rel="nofollow">Banana (Port of Kibana)</a></td>
      <td><a href="https://www.elastic.co/products/kibana" rel="nofollow">Kibana</a></td>
    </tr>
    <tr>
      <td>Hosting providers </td>
      <td><a href="http://www.websolr.com" rel="nofollow">WebSolr</a>, <a href="http://www.searchify.com" rel="nofollow">Searchify</a>, <a href="http://www.hosted-solr.com" rel="nofollow">Hosted-Solr</a>, <a href="http://www.indexdepot.com" rel="nofollow">IndexDepot</a>, <a href="http://www.opensolr.com" rel="nofollow">OpenSolr</a>, <a href="http://www.gotosolr.com" rel="nofollow">gotosolr</a></td>
      <td><a href="https://www.elastic.co/found" rel="nofollow">Found</a>, <a href="http://objectrocket.com/elasticsearch/" rel="nofollow">ObjectRocket</a>, <a href="http://www.bonsai.io" rel="nofollow">bonsai.io</a>, <a href="http://www.indexisto.com" rel="nofollow">Indexisto</a>, <a href="http://www.qbox.io" rel="nofollow">qbox.io</a>, <a href="http://www.indexdepot.com" rel="nofollow">IndexDepot</a>, <a href="http://www.compose.io" rel="nofollow">Compose.io</a></td>
    </tr>


    </tbody>  
  </table> 
 
  <br/><hr/>
  <h2 class="secthead">Thoughts...</h2>
  <p>I'm embedding my answer to this "Solr-vs-Elasticsearch" Quora question verbatim here:</p>
  <blockquote>
  <p>
1. Elasticsearch was born in the age of REST APIs. If you love REST APIs, you'll probably feel more at home with ES from the get-go. I don't actually think it's 'cleaner' or 'easier to use', but just that it is more aligned with web 2.0 developers' mindsets.<br/>
<br/>
2. Elasticsearch's Query DSL syntax is really flexible and it's pretty easy to write complex queries with it, though it does border on being verbose. Solr doesn't have an equivalent, last I checked. Having said that, I've never found Solr's query syntax wanting, and I've always been able to easily write a custom SearchComponent if needed (more on this later).<br/>
<br/>
3. I find Elasticsearch's documentation to be pretty awful. It doesn't help that some examples in the documentation are written in YAML and others in JSON. I wrote a ES code parser once to auto-generate documentation from Elasticsearch's source and found a number of discrepancies between code and what's documented on the website, not to mention a number of undocumented/alternative ways to specify the same config key. <br/>
<br/>
By contrast, I've found Solr to be consistent and really well-documented. I've found pretty much everything I've wanted to know about querying and updating indices without having to dig into code much. Solr's schema.xml and solrconfig.xml are *extensively* documented with most if not all commonly used configurations. <br/>
<br/>
4. Whilst what Rick says about ES being mostly ready to go out-of-box is true, I think that is also a possible problem with ES. Many users don't take the time to do the most simple config (e.g. type mapping) of ES because it 'just works' in dev, and end up running into issues in production. <br/>
<br/>
And once you do have to do config, then I personally prefer Solr's config system over ES'. Long JSON config files can get overwhelming because of the JSON's lack of support for comments. Yes you can use YAML, but it's annoying and confusing to go back and forth between YAML and JSON. <br/>
<br/>
5. If your own app works/thinks in JSON, then without a doubt go for ES because ES thinks in JSON too. Solr merely supports it as an afterthought. ES has a number of nice JSON-related features such as parent-child and nested docs that makes it a very natural fit. Parent-child joins are awkward in Solr, and I don't think there's a Solr equivalent for ES Inner hits.<br/>
<br/>
6. ES doesn't require ZooKeeper for it's 'elastic' features which is nice coz I personally find ZK unpleasant, but as a result, ES does have issues with split-brain scenarios though (google 'elasticsearch split-brain' or see this: Elasticsearch Resiliency Status).<br/>
<br/>
7. Overall from working with clients as a Solr/Elasticsearch consultant, I've found that developer preferences tend to end up along language party lines: if you're a Java/c# developer, you'll be pretty happy with Solr. If you live in Javascript or Ruby, you'll probably love Elasticsearch. If you're on Python or PHP, you'll probably be fine with either.  <br/>
<br/>
Something to add about this: ES doesn't have a very elegant Java API IMHO (you'll basically end up using REST because it's less painful), whereas Solrj is very satisfactory and more efficient than Solr's REST API. If you're primarily a Java dev team, do take this into consideration for your sanity. There's no scenario in which constructing JSON in Java is fun/simple, whereas in Python its absolutely pain-free, and believe me, if you have a non-trivial app, your ES json query strings will be works of art. <br/>
<br/>
8.  ES doesn't have in-built support for pluggable 'SearchComponents', to use Solr's terminology. SearchComponents are (for me) a pretty indispensable part of Solr for anyone who needs to do anything customized and in-depth with search queries. <br/>
<br/>
Yes of course, in ES you can just implement your own RestHandler, but that's just not the same as being able to plug-into and rewire the way search queries are handled and parsed. <br/>
<br/>
9. Whichever way you go, I highly suggest you choose a client library which is as 'close to the metal' as you can get. Both ES and Solr have *really* simple search and updating search APIs. If a client library introduces an additional DSL layer in attempt to 'simplify', I suggest you think long and hard about using it, as it's likely to complicate matters in the long-run, and make debugging and asking for help on SO more problematic. <br/>
<br/>
In particular, if you're using Rails + Solr, consider using rsolr/rsolr<br/>
 instead of  sunspot/sunspot if you can help it. ActiveRecord is complex code and sufficiently magical. The last thing you want is more magic on top of that. <br/>
<br/>
---<br/>
<br/>
To conclude, ES and Solr have more or less feature-parity and from a feature standpoint, there's rarely one reason to go one way or the other (unless your app lives/breathes JSON). Performance-wise, they are also likely to be quite similar (I'm sure there are exceptions to the rule. ES' relatively new autocomplete implementation, for example, is a pretty dramatic departure from previous Lucene/Solr implementations, and I suspect it produces faster responses at scale).<br/>
<br/>
ES does offer less friction from the get-go and you feel like you have something working much quicker, but I find this to be illusory. Any time gained in this stage is lost when figuring out how to properly configure ES because of poor documentation - an inevitablity when you have a non-trivial application. <br/>
<br/>
Solr encourages you to understand a little more about what you're doing, and the chance of you shooting yourself in the foot is somewhat lower, mainly because you're forced to read and modify the 2 well-documented XML config files in order to have a working search app.<br/>
<br/>
---<br/>
<br/>
EDIT on Nov 2015: <br/>
<br/>
ES has been gradually distinguishing itself from Solr when it comes to data analytics. I think it's fair to attribute this to the immense traction of the ELK stack in the logging, monitoring and analytic space. My guess is that this is where Elastic (the company) gets the majority of its revenue, so it makes perfect sense that ES (the product) reflects this.<br/>
<br/>
We see this manifesting primarily in the form of aggregations, which is a more flexible and nuanced replacement for facets. Read more about aggregations here: Migrating to aggregations<br/>
<br/>
Aggregations have been out for a while now (since 1.4), but with the recently released ES 2.0 comes pipeline aggregations, which let you compute aggregations such as derivatives, moving averages, and series arithmetic on the results of other aggregations. Very cool stuff, and Solr simply doesn't have an equivalent. More on pipeline aggregations here: Out of this world aggregations<br/>
<br/>
If you're currently using or contemplating using Solr in an analytics app, it is worth your while to look into ES aggregation features to see if you need any of it.  </p></blockquote>
  <br/><hr/>
  <h2 class="secthead">Resources</h2>
  <ul>
  <li>My other sites may be of interest if you're new to Lucene, Solr and Elasticsearch: 
    <ul>
      <li><a href="http://www.lucenetutorial.com">Lucene Tutorial</a></li>
      <li><a href="http://www.elasticsearchtutorial.com">Elasticsearch Tutorial</a></li>
      <li><a href="http://www.solrtutorial.com">Solr Tutorial</a></li>
    </ul>
  </li>
  <li>The <a href="http://wiki.apache.org/solr">Solr wiki</a> and the <a href="http://www.elasticsearch.org/guide">Elasticsearch Guide</a> are your friends.</li>
  </ul>
  
  <br/><hr/>
  <h2 class="secthead">Contribute</h2>
  <p>If you see any mistakes, or would like to append to the information on this webpage, you can clone the <a href="https://github.com/superkelvint/solr-vs-elasticsearch">GitHub repo for this site</a> with:</p>
  <blockquote>git clone https://github.com/superkelvint/solr-vs-elasticsearch</blockquote>
  <p>and submit a pull request.</p>
  
  <br/><hr/>
  <h2 class="secthead">Popular books related to Search</h2>
  <?php include_once("inc/amazon-books.php");?>
</div>
<?php
include_once("inc/footer.php");
?>

