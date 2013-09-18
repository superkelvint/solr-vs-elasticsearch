<?php 
$page_title="Apache Solr vs ElasticSearch - the Feature Smackdown!";
include_once("inc/header.php");
?>

<div class="container">
  <div class="jumbotron subhead">
      <h1 class="secthead" style="margin-top:-10px;margin-bottom:-5px">Apache Solr vs ElasticSearch</h1><h3 class="secthead">The Feature Smackdown</h3>
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
      <td>Client libraries <a href="#" title="Libraries for communicating with Solr in various languages." class="tt"><img src="img/help.png"></a></td>
      <td>PHP, Ruby, Perl, Scala, Python, .NET, Javascript</td>
      <td>PHP, Ruby, Perl, Scala, Python, .NET, Javascript, Erlang, Clojure</td>
    </tr>
    <tr>
      <td>3rd-party product integration (open-source)<a href="#" title="3rd-party open-source products which use Solr to provide search functionality." class="tt"><img src="img/help.png"></a></td>
      <td>Drupal, Magento, Django, ColdFusion, Wordpress, OpenCMS, Plone, Typo3, ez Publish, Symfony2, Riak (via Yokozuna)</td>
      <td>Drupal, Django, Symfony2, Wordpress</td>
    </tr>
    <tr>
      <td>3rd-party product integration (commercial)<a href="#" title="3rd-party commercial products which use Solr to provide search functionality." class="tt"><img src="img/help.png"></a></td>
      <td>DataStax Enterprise Search</td>
      <td>SearchBlox</td>
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
      <td>DataImportHandler - MySQL, CSV, XML, Tika, URL, Flat File</td>
      <td>Rivers modules - Wikipedia, MongoDB, CouchDB, RabbitMQ, RSS, Sofa, JDBC, FileSystem, Dropbox, ActiveMQ, LDAP, Amazon SQS, St9, OAI, Twitter</td>
    </tr>
    <tr>
      <td>ID field for updates and deduplication</td>
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
      <td><img src="img/cross.png"> Flat document structure. No native support for nesting documents</td>
      <td><img src="img/tick.png"></td>
    </tr>  
    <tr>
      <td>Multiple document types per schema <a href="#" title="The RDBMS-equivalent of a schema is a database. <br/>A database table is a collection of fields.<br/> Having multiple doc types per schema is akin to having multiple tables per database." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/cross.png"> One set of fields per schema, one schema per core</td>
      <td><img src="img/tick.png"></td>
    </tr>  
    <tr>
      <td>Online schema changes <a href="#" title="Can changes to the schema be made without restarting the server?" class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/cross.png"> Schema change requires restart. Workaround possible using MultiCore.</td>
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
      <td><img src="img/cross.png"></td>
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
      <td>Spatial search <a href="#" title="Searching for documents by latitude/longitude." class="tt"><img src="img/help.png"></a></td>
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
      <td><img src="img/tick.png"> The way top N facets work now is by getting the top N from each shard, and merging the results. This can give <a href="https://github.com/elasticsearch/elasticsearch/issues/1305">incorrect counts</a> when num shards &gt; 1.</td>
    </tr>
    <tr>
      <td>Pivot Facets <a href="#" title="A pivot facet, aka decision tree, is a multi-level facet across multiple fields. e.g. pivoting on price than category returns category facet counts for each price facet." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/cross.png"></td>
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
      <td><img src="img/cross.png"></td>
      <td><img src="img/tick.png"> Percolation</td>
    </tr>
    <tr>
      <td>Field collapsing/Results grouping <a href="#" title="Field Collapsing collapses a group of results with the same field value down to a single (or fixed number) of entries. For example, most search engines such as Google collapse on site so only one or two entries are shown, along with a link to click to see more results from that site." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/cross.png"> possibly 0.20+</td>
    </tr>
    <tr>
      <td>Spellcheck</td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"> <a href="http://www.elasticsearch.org/guide/reference/api/search/suggest/">Suggest API</a></td>
    </tr>
    <tr>
      <td>Autocomplete</td>
      <td><img src="img/tick.png"></td>
      <td>Beta implementation from community plugin</td>
    </tr>
    <tr>
      <td>Query elevation  <a href="#" title="Query elevation enables you to configure the top results for a given query regardless of the normal lucene scoring. This is sometimes called 'sponsored search', 'editorial boosting' or 'best bets'." class="tt"><img src="img/help.png"></a> </td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/cross.png"></td>
    </tr>
    <tr>
      <td>Joins <a href="#" title="A method of searching on inter-document relationships, just like SQL joins." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/cross.png"> It's not supported in distributed search. See <a href="https://issues.apache.org/jira/browse/LUCENE-3759">LUCENE-3759</a>.</td>
      <td><img src="img/tick.png"> via <i>has_children</i> and <i>top_children</i> queries</td>
    </tr>  
    <tr>
      <td>Filter queries <a href="#" title="Cached queries which only limit the set of document results and do not affect doc score." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"></td>
      <td><img src="img/tick.png"> also supports filtering by native scripts</td>
    </tr>  
    <tr>
      <td>Filter execution order <a href="#" title="The ability to specify when a filter query is expensive and thus should run last, on the smallest document set possible." class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"> local params and <i>cache</i> property</td>
      <td><img src="img/tick.png"> <i>_cache</i> and <i>_cache_key</i> property</td>
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
      <td><img src="img/cross.png"></td>
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
      <td><img src="img/tick.png"> Only ElasticSearch nodes</td>
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
      <td><img src="img/cross.png"> specified at index-creation time, with command-line param -DnumShards=n. Can be increased by splitting an existing shard (<a href="https://issues.apache.org/jira/browse/SOLR-3755">SOLR-3755</a>). Cannot be lowered.  Additional replicas can be created.</td>
      <td><img src="img/cross.png"> each index has 5 shards by default. Number of primary shards cannot be changed once the index is created. Replicas can be increased anytime.</td>
    </tr> 
    <tr>
      <td>Relocate shards and replicas <a href="#" title="Move shards and replicas within a cluster" class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/cross.png"> can be done by creating a shard replicate on the desired node and then removing the shard from the source node</td>
      <td><img src="img/tick.png"> can move shards and replicas to any node in the cluster on demand</td>
    </tr>  
    <tr>
      <td>Control shard routing <a href="#" title="Control which shard a search request gets routed to" class="tt"><img src="img/help.png"></a></td>
      <td><img src="img/tick.png"> with some config changes</td>
      <td><img src="img/tick.png"> <i>routing</i> parameter</td>
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
 
  <br/><hr/>
  <h2 class="secthead">Thoughts...</h2>
  <p>As a number of folks point out in the discussion below, feature comparisons are inherently shallow and only go so far. I think they serve a purpose, but shouldn't be taken to be the last word on these 2 fantastic search products.</p>
  <p>If you're running a smallish site and need search features without the distributed bells-and-whistles, I think you'll be very happy with either Solr or ElasticSearch. </p>
  <p>The exception to this is if you need RIGHT NOW some very specific feature like field grouping which is currently implemented in Solr and not ElasticSearch. Because of the considerable momentum behind ElasticSearch, it is very likely that the feature-set between the 2 products will converge considerably in the near future.</p>
  <p>If you're planning a large installation that requires running distributed search instances, I suspect you're going to be happier with ElasticSearch. </p>
  <p>As Matt Weber points out below, ElasticSearch was built to be distributed from the ground up, not tacked on as an 'afterthought' like it was with Solr. This is totally evident when examining the design and architecture of the 2 products, and also when browsing the source code.</p>
  
  <br/><hr/>
  <h2 class="secthead">Resources</h2>
  <ul>
  <li>My other sites may be of interest if you're new to Lucene, Solr and ElasticSearch: 
    <ul>
      <li><a href="http://www.lucenetutorial.com">Lucene Tutorial</a></li>
      <li><a href="http://www.elasticsearchtutorial.com">ElasticSearch Tutorial</a></li>
      <li><a href="http://www.solrtutorial.com">Solr Tutorial</a></li>
    </ul>
  </li>
  <li>The <a href="http://wiki.apache.org/solr">Solr wiki</a> and the <a href="http://www.elasticsearch.org/guide">ElasticSearch Guide</a> are your friends.</li>
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

