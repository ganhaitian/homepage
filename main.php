<!DOCTYPE html>

<html dir="ltr" lang="en-US">
	<head>

		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
		<title>甘工的主页</title>
			
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="http://welovenature.hostoi.com/xmlrpc.php" />
		
		<link rel="stylesheet" type="text/css" media="screen" href="./common/css/themes/style.css">
		<link rel="stylesheet" type="text/css" media="screen" href="./common/css/framework/color.php.css"  />
		
		<link href='http://fonts.googleapis.com/css?family=Gentium+Basic:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Droid+Sans' rel='stylesheet' type='text/css'>
		
		<link rel="alternate" type="application/rss+xml" title="We Love Nature RSS Feed" href="http://welovenature.hostoi.com/feed/" />
		<link rel="pingback" href="http://welovenature.hostoi.com/xmlrpc.php" />
		
		
		<meta name='robots' content='noindex,nofollow' />
		<link rel="alternate" type="application/rss+xml" title="We Love Nature &raquo; Feed" href="http://welovenature.hostoi.com/feed/" />
		<link rel="alternate" type="application/rss+xml" title="We Love Nature &raquo; Comments Feed" href="http://welovenature.hostoi.com/comments/feed/" />
		<link rel='stylesheet' id='nivo-slider-css'  href='./common/css/shortcodes-ultimate/nivoslider.css' type='text/css' media='all' />
		<link rel='stylesheet' id='jcarousel-css'  href='./common/css/shortcodes-ultimate/jcarousel.css' type='text/css' media='all' />
		<link rel='stylesheet' id='shortcodes-ultimate-css'  href='./common/css/shortcodes-ultimate/style.css' type='text/css' media='all' />
		<script type='text/javascript' src='./common/js/jquery-1.7.2.js'></script>
		<script type='text/javascript' src='./common/js/jwplayer.js'></script>
		<script type='text/javascript' src='./common/js/nivoslider.js'></script>
		<script type='text/javascript' src='./common/js/jcarousel.js'></script>
		<script type='text/javascript' src='./common/js/init.js'></script>
		<script type='text/javascript' src='./common/js/custom.js'></script>
		<script type='text/javascript' src='./common/js/scroller.js'></script>
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://welovenature.hostoi.com/xmlrpc.php?rsd" />
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://welovenature.hostoi.com/wp-includes/wlwmanifest.xml" /> 
		<meta name="generator" content="WordPress 3.3.1" />

		<!--[if lte IE 8]>
			<script src="http://welovenature.hostoi.com/wp-content/themes/typo_new/styling/js/modernizr.custom.51584.js"></script>
			<script src="http://welovenature.hostoi.com/wp-content/themes/typo_new/styling/js/selectivizr-min.js"></script>
		<![endif]-->
		<script type="text/javascript" >
			$(document).ready(function(){
				$("#blog-submit").click(function(){
						$("#blog-post-mask").show();
						$.ajax({
							url:'blogpost.php',
							dataType:'json',
							type:'POST',
							data:{
								title:$("#editor-article-title").attr("value"),
								//content:$("#editor-content").val().replace(/[\r]/g,"").replace(/[\n]/g,"<br>")
								content:$("#editor-content").val()
							},
							success:function(data){
								$("#blog-post-mask").hide();
							},
							complete:function(){
								//alert('complete!');
							}
						});
				});
		 });
		</script>
		
	</head>
	<body class="home blog">

	<div id="main-container" >
		<header>
			<div class="container clearfix">
				<div id="logo">
					<!--a href="http://welovenature.hostoi.com"><img src="http://welovenature.hostoi.com/wp-content/uploads/2012/06/logo.png" /></a-->
					代码控＆程序辕
				</div>
				<!--div id="slogan">
					<h1 class="slogan">Aloha! 我是甘工,甘是我的姓,工是工程师的工,这个站记录了我研究技术的过程中积累下的经验.文章不限篇幅,不限主题,不限粗浅难易...</h1>
				</div-->
				<nav>
					<div class="menu-menu-container">
						<ul id="menu-menu" class="menu">
							<li id="menu-item-88" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-88"><a href="http://welovenature.hostoi.com/">技术</a></li>
							<li id="menu-item-188" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-188"><a href="http://welovenature.hostoi.com/contact/">读书</a></li>
							<li id="menu-item-189" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-189"><a href="http://welovenature.hostoi.com/archives/">影评</a></li>
							<li id="menu-item-205" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-205"><a href="http://welovenature.hostoi.com/full-width/">联系方式</a></li>
							<li id="menu-item-208" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-208"><a href="http://welovenature.hostoi.com/page-example/">简历</a></li>
						</ul>
					</div>			
				</nav>
			</div>
		</header>
		<div class="container main clearfix">
			<div id="main">
				<div class="center">
					<div class="top"></div>	
					<section>		
						<div class="blog-post-mask"  id="blog-post-mask">
							<span class="loading"></span>
						</div>
						<div class="blog-post" >
							<div>
								<input id="editor-article-title" type="text" style="width:89.6%;" onblur="this.value=(this.value=='') ? '文章标题' : this.value;" onfocus="this.value=(this.value=='文章标题') ? '' : this.value;" value="文章标题" tabindex="1" name="posttitle">
							</div>
							<div style="margin:15px 0 5px 0;" >
								<textarea id="editor-content" cols="70" rows="4"></textarea>
							</div>
							<div>
								<input type="text" style="width:50%;" onblur="this.value=(this.value=='') ? '添加标签' : this.value;" onfocus="this.value=(this.value=='添加标签') ? '' : this.value;" value="添加标签">
								<input id="blog-submit" type="submit" value="发布"　tabindex="3" style="float:right;margin:2px 54px 0 0;" > 
							</div>
						</div>			
						<div class="sep"></div>		
						<!--article id="post-242" class="post-243 post type-post status-publish format-standard hentry category-general" class="clearfix">
							<?php
								/*
								$connection=mysql_connect("127.0.0.1","root","tiger");
								mysql_select_db("homepage",$connection);
								$result=mysql_query("select * from g_homepage_article");
								echo mysql_result($result,0,"article_title");
								echo '<br>';
								echo mysql_result($result,0,"article_author");
								echo '<br>';
								*/
							?>
						</article-->									
						<?php
							$conn=mysql_connect("127.0.0.1","root","tiger");
							mysql_select_db("homepage",$conn);
							$result=mysql_query("select * from g_homepage_article order by ts desc");
							while($row=mysql_fetch_array($result)){
								echo '<article id="post-217" class="post-217 post type-post status-publish format-standard hentry category-bungling category-groovy category-stop tag-chips tag-fan-riffic tag-honk-kong" class="clearfix">';
								echo '<div class="title_meta clearfix">';
								echo '<div class="meta">';
								echo '<ul class="date">';
								echo '<li class="num">'.$row['day'].'</li>';
								echo '<li class="month">Oct</li>';
								echo '</ul>';
								echo '<div class="comments">';
								echo '<a href="http://welovenature.hostoi.com/" class="comments-link"  title="'.$row['article_title'].'">0</a>			</div>';
								echo '<div class="meta_div">';
								echo 'Article by <a href="http://welovenature.hostoi.com/author/silviu/">'.$row['article_author'].'</a>';
								echo '<hr class="meta_hr" />';
								echo 'Posted in Bungling,Groovy,Stop-Tagged Chips,Fan-riffic,Hong Kong</div>';
								echo '</div>';
								echo '<h1 class="title">';
								echo '<a href="http://welovenature.hostoi.com/2012/06/21/ten-years-ago-a-crack-commando-unit-was-sent-to-prison/">'.$row['article_title'].'</a>';
								echo '</h1>';
								echo '<div class="the_content">';
								echo "<p>$row[content]</p>";
								echo '</div>';
								echo '<a class="read_more" href="http://welovenature.hostoi.com/2012/06/21/ten-years-ago-a-crack-commando-unit-was-sent-to-prison/">阅读全文</a>';
								echo '</div>';
								echo '</article>';
								echo '<div class="sep"></div>';
							}
						?>															
			<div class="sep"></div>
												
			</section>

			<div><ul id='page-number' class='clearfix'><li><a class='active'>1</a></li><li><a href='http://welovenature.hostoi.com/page/2/' >2</a></li></ul></div>
			<div class="bottom"></div>
		</div>
	</div>	
	
		<aside id="sidebar">
		<div id="search-2" class="sidebar_box widget_search clearfix">
			<form method="get" id="searchform" action="http://welovenature.hostoi.com"/>
				<fieldset>
					<input type="text" name="s" id="s" value="输入搜索内容按回车" onfocus="if(this.value=='输入搜索内容按回车')this.value='';" onblur="if(this.value=='')this.value='输入搜索内容按回车';" />
				</fieldset>
			</form>
		</div>
		<div id="text-2" class="sidebar_box widget_text clearfix">			
			<div class="textwidget"><p>甘是甘工的工，工是工程师的工。</p>
			</div>
		</div>
		<div id="categories-2" class="sidebar_box widget_categories clearfix">
			<h4>分类目录</h4>		
			<ul>
				<li class="cat-item cat-item-40"><a href="http://welovenature.hostoi.com/category/bungling/" title="View all posts filed under Bungling">Bungling</a>
				</li>
				<li class="cat-item cat-item-9"><a href="http://welovenature.hostoi.com/category/burned/" title="View all posts filed under Burned">Burned</a>
				</li>
				<li class="cat-item cat-item-25"><a href="http://welovenature.hostoi.com/category/fire/" title="View all posts filed under Fire">Fire</a>
				</li>
				<li class="cat-item cat-item-8"><a href="http://welovenature.hostoi.com/category/friends/" title="View all posts filed under Friends">Friends</a>
				</li>
				<li class="cat-item cat-item-30"><a href="http://welovenature.hostoi.com/category/fun/" title="View all posts filed under Fun">Fun</a>
				</li>
				<li class="cat-item cat-item-4"><a href="http://welovenature.hostoi.com/category/general/" title="View all posts filed under General">General</a>
				</li>
				<li class="cat-item cat-item-37"><a href="http://welovenature.hostoi.com/category/groovy/" title="View all posts filed under Groovy">Groovy</a>
				</li>
				<li class="cat-item cat-item-36"><a href="http://welovenature.hostoi.com/category/humans/" title="View all posts filed under Humans">Humans</a>
				</li>
				<li class="cat-item cat-item-15"><a href="http://welovenature.hostoi.com/category/rough/" title="View all posts filed under Rough">Rough</a>
				</li>
				<li class="cat-item cat-item-39"><a href="http://welovenature.hostoi.com/category/stop/" title="View all posts filed under Stop">Stop</a>
				</li>
				<li class="cat-item cat-item-31"><a href="http://welovenature.hostoi.com/category/story/" title="View all posts filed under Story">Story</a>
				</li>
				<li class="cat-item cat-item-14"><a href="http://welovenature.hostoi.com/category/though/" title="View all posts filed under Though">Though</a>
				</li>
				<li class="cat-item cat-item-42"><a href="http://welovenature.hostoi.com/category/thunder/" title="View all posts filed under Thunder">Thunder</a>
				</li>
				<li class="cat-item cat-item-35"><a href="http://welovenature.hostoi.com/category/thundercats/" title="View all posts filed under Thundercats">Thundercats</a>
				</li>
				<li class="cat-item cat-item-20"><a href="http://welovenature.hostoi.com/category/ulysses/" title="View all posts filed under Ulysses">Ulysses</a>
				</li>
				<li class="cat-item cat-item-10"><a href="http://welovenature.hostoi.com/category/wind/" title="View all posts filed under Wind">Wind</a>
				</li>
				<li class="cat-item cat-item-24"><a href="http://welovenature.hostoi.com/category/world/" title="View all posts filed under World">World</a>
				</li>
			</ul>
		</div>		
		<div id="recent-posts-3" class="sidebar_box widget_recent_entries clearfix">		
			<h4>近期文章</h4>		
			<ul>
				<li><a href="http://welovenature.hostoi.com/2012/07/04/this-works-with-shortcodes/" title="This works with shortcodes!">This works with shortcodes!</a></li>
				<li><a href="http://welovenature.hostoi.com/2012/06/21/today-still-wanted-by-the-government/" title="Today, still wanted by the government">Today, still wanted by the government</a></li>
				<li><a href="http://welovenature.hostoi.com/2012/06/21/in-search-of-earth-flying-in-to-the-night-2/" title="In search of Earth, flying in to the night">In search of Earth, flying in to the night</a></li>
				<li><a href="http://welovenature.hostoi.com/2012/06/21/ten-years-ago-a-crack-commando-unit-was-sent-to-prison/" title="Ten years ago a crack commando unit was sent to prison">Ten years ago a crack commando unit was sent to prison</a></li>
				<li><a href="http://welovenature.hostoi.com/2012/06/15/thunder-thunder-thundercats-ho/" title="Thunder, thunder, thundercats, Ho!">Thunder, thunder, thundercats, Ho!</a></li>
			</ul>
		</div>
		<div id="my_tags-3" class="sidebar_box my_tags clearfix">
			<h4>标签</h4>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/adventures/'>Adventures</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/around/'>Around</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/back/'>Back</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/chest/'>Chest</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/chips/'>Chips</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/corny/'>Corny</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/fan-riffic/'>Fan-riffic</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/floppy/'>Floppy</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/fly/'>Fly</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/friends/'>Friends</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/groovy/'>Groovy</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/helping/'>Helping</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/honk-kong/'>Honk Kong</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/king/'>King</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/phooey/'>Phooey</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/pigeons/'>Pigeons</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/quick/'>Quick</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/sounds/'>Sounds</a>
			<a class='my_tags' href='http://welovenature.hostoi.com/tag/wings/'>Wings</a>
		</div>
		<div id="archives-2" class="sidebar_box widget_archive clearfix">
			<h4>文章归档</h4>		
			<ul>
				<li><a href='http://welovenature.hostoi.com/2012/07/' title='July 2012'>July 2012</a></li>
				<li><a href='http://welovenature.hostoi.com/2012/06/' title='June 2012'>June 2012</a></li>
				<li><a href='http://welovenature.hostoi.com/2012/05/' title='May 2012'>May 2012</a></li>
				<li><a href='http://welovenature.hostoi.com/2012/03/' title='March 2012'>March 2012</a></li>
			</ul>
		</div>
		<div id="my_tweets-2" class="sidebar_box my_tweets clearfix">
			<h4>最新微博</h4>            
			<ul id="twitter_update_list" class="twitter">
                <li><p></p></li>
            </ul>
            <a href="http://twitter.com/@smashingmag" class="twitter-link">Follow us on Twitter</a>		
		</div>		
	</aside>		
</div>
<!-- .container -->
			<footer>
		<div class="container clearfix" >
							<hr class="footer_blog_right" />
						
			<div class="footer_boxes clearfix">
				<div id="text-3" class="footer_box widget_text clearfix"><h4>Info</h4>			<div class="textwidget"><p>Oh, the great and lovely white rabbit, how he flies through the skies as any old cat does. The flowers smell so good when the rain pours over the hills and the rabbits eat meat with the chickens. The great thing about flying is that anybody can do it, well anybody excepting the flowers.</p>
</div>
		</div><div id="categories-3" class="footer_box widget_categories clearfix"><h4>Categories</h4>		<ul>
	<li class="cat-item cat-item-40"><a href="http://welovenature.hostoi.com/category/bungling/" title="View all posts filed under Bungling">Bungling</a>
</li>
	<li class="cat-item cat-item-9"><a href="http://welovenature.hostoi.com/category/burned/" title="View all posts filed under Burned">Burned</a>
</li>
	<li class="cat-item cat-item-25"><a href="http://welovenature.hostoi.com/category/fire/" title="View all posts filed under Fire">Fire</a>
</li>
	<li class="cat-item cat-item-8"><a href="http://welovenature.hostoi.com/category/friends/" title="View all posts filed under Friends">Friends</a>
</li>
	<li class="cat-item cat-item-30"><a href="http://welovenature.hostoi.com/category/fun/" title="View all posts filed under Fun">Fun</a>
</li>
	<li class="cat-item cat-item-4"><a href="http://welovenature.hostoi.com/category/general/" title="View all posts filed under General">General</a>
</li>
	<li class="cat-item cat-item-37"><a href="http://welovenature.hostoi.com/category/groovy/" title="View all posts filed under Groovy">Groovy</a>
</li>
	<li class="cat-item cat-item-36"><a href="http://welovenature.hostoi.com/category/humans/" title="View all posts filed under Humans">Humans</a>
</li>
	<li class="cat-item cat-item-15"><a href="http://welovenature.hostoi.com/category/rough/" title="View all posts filed under Rough">Rough</a>
</li>
	<li class="cat-item cat-item-39"><a href="http://welovenature.hostoi.com/category/stop/" title="View all posts filed under Stop">Stop</a>
</li>
	<li class="cat-item cat-item-31"><a href="http://welovenature.hostoi.com/category/story/" title="View all posts filed under Story">Story</a>
</li>
	<li class="cat-item cat-item-14"><a href="http://welovenature.hostoi.com/category/though/" title="View all posts filed under Though">Though</a>
</li>
	<li class="cat-item cat-item-42"><a href="http://welovenature.hostoi.com/category/thunder/" title="View all posts filed under Thunder">Thunder</a>
</li>
	<li class="cat-item cat-item-35"><a href="http://welovenature.hostoi.com/category/thundercats/" title="View all posts filed under Thundercats">Thundercats</a>
</li>
	<li class="cat-item cat-item-20"><a href="http://welovenature.hostoi.com/category/ulysses/" title="View all posts filed under Ulysses">Ulysses</a>
</li>
	<li class="cat-item cat-item-10"><a href="http://welovenature.hostoi.com/category/wind/" title="View all posts filed under Wind">Wind</a>
</li>
	<li class="cat-item cat-item-24"><a href="http://welovenature.hostoi.com/category/world/" title="View all posts filed under World">World</a>
</li>
		</ul>
</div><div id="calendar-3" class="footer_box widget_calendar clearfix"><h4>&nbsp;</h4><div id="calendar_wrap"><table id="wp-calendar">
	<caption>October 2012</caption>
	<thead>
	<tr>
		<th scope="col" title="Monday">M</th>
		<th scope="col" title="Tuesday">T</th>
		<th scope="col" title="Wednesday">W</th>
		<th scope="col" title="Thursday">T</th>
		<th scope="col" title="Friday">F</th>
		<th scope="col" title="Saturday">S</th>
		<th scope="col" title="Sunday">S</th>
	</tr>
	</thead>

	<tfoot>
	<tr>
		<td colspan="3" id="prev"><a href="http://welovenature.hostoi.com/2012/07/" title="View posts for July 2012">&laquo; Jul</a></td>
		<td class="pad">&nbsp;</td>
		<td colspan="3" id="next" class="pad">&nbsp;</td>
	</tr>
	</tfoot>

	<tbody>
	<tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td>
	</tr>
	<tr>
		<td>8</td><td>9</td><td>10</td><td>11</td><td>12</td><td>13</td><td>14</td>
	</tr>
	<tr>
		<td>15</td><td>16</td><td id="today">17</td><td>18</td><td>19</td><td>20</td><td>21</td>
	</tr>
	<tr>
		<td>22</td><td>23</td><td>24</td><td>25</td><td>26</td><td>27</td><td>28</td>
	</tr>
	<tr>
		<td>29</td><td>30</td><td>31</td>
		<td class="pad" colspan="4">&nbsp;</td>
	</tr>
	</tbody>
	</table>
		</div></div>
		<div id="tag_cloud-3" class="footer_box widget_tag_cloud clearfix">
			<h4>Tags</h4>
			<div class="tagcloud">
				<a href='http://welovenature.hostoi.com/tag/adventures/' class='tag-link-19' title='2 topics' style='font-size: 14.3pt;'>Adventures</a>
				<a href='http://welovenature.hostoi.com/tag/around/' class='tag-link-28' title='1 topic' style='font-size: 8pt;'>Around</a>
				<a href='http://welovenature.hostoi.com/tag/back/' class='tag-link-27' title='1 topic' style='font-size: 8pt;'>Back</a>
				<a href='http://welovenature.hostoi.com/tag/chest/' class='tag-link-21' title='1 topic' style='font-size: 8pt;'>Chest</a>
				<a href='http://welovenature.hostoi.com/tag/chips/' class='tag-link-12' title='3 topics' style='font-size: 18.5pt;'>Chips</a>
				<a href='http://welovenature.hostoi.com/tag/corny/' class='tag-link-33' title='2 topics' style='font-size: 14.3pt;'>Corny</a>
				<a href='http://welovenature.hostoi.com/tag/fan-riffic/' class='tag-link-41' title='1 topic' style='font-size: 8pt;'>Fan-riffic</a>
				<a href='http://welovenature.hostoi.com/tag/floppy/' class='tag-link-23' title='1 topic' style='font-size: 8pt;'>Floppy</a>
				<a href='http://welovenature.hostoi.com/tag/fly/' class='tag-link-26' title='1 topic' style='font-size: 8pt;'>Fly</a>
				<a href='http://welovenature.hostoi.com/tag/friends/' class='tag-link-8' title='1 topic' style='font-size: 8pt;'>Friends</a>
				<a href='http://welovenature.hostoi.com/tag/groovy/' class='tag-link-37' title='2 topics' style='font-size: 14.3pt;'>Groovy</a>
				<a href='http://welovenature.hostoi.com/tag/helping/' class='tag-link-32' title='3 topics' style='font-size: 18.5pt;'>Helping</a>
				<a href='http://welovenature.hostoi.com/tag/honk-kong/' class='tag-link-17' title='4 topics' style='font-size: 22pt;'>Honk Kong</a>
				<a href='http://welovenature.hostoi.com/tag/king/' class='tag-link-11' title='1 topic' style='font-size: 8pt;'>King</a>
				<a href='http://welovenature.hostoi.com/tag/phooey/' class='tag-link-16' title='1 topic' style='font-size: 8pt;'>Phooey</a>
				<a href='http://welovenature.hostoi.com/tag/pigeons/' class='tag-link-22' title='1 topic' style='font-size: 8pt;'>Pigeons</a>
				<a href='http://welovenature.hostoi.com/tag/quick/' class='tag-link-29' title='1 topic' style='font-size: 8pt;'>Quick</a>
				<a href='http://welovenature.hostoi.com/tag/sounds/' class='tag-link-34' title='1 topic' style='font-size: 8pt;'>Sounds</a>
				<a href='http://welovenature.hostoi.com/tag/wings/' class='tag-link-13' title='1 topic' style='font-size: 8pt;'>Wings</a>
			</div>
		</div>			
		</div>
			
			<hr class="footer_hr" />
			
			<p class="copy">&copy; Copyright 2012. <a href="http://welovenature.hostoi.com">We Love Nature</a>. All rights reserved. Powered by <a href="http://wordpress.org/">Wordpress</a>.</p>
			<div class="fmenu"><div class="menu-menu-container"><ul id="menu-menu-1" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-88"><a href="http://welovenature.hostoi.com/">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-188"><a href="http://welovenature.hostoi.com/contact/">Contact</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-189"><a href="http://welovenature.hostoi.com/archives/">Archives</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-205"><a href="http://welovenature.hostoi.com/full-width/">Full Width</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-208"><a href="http://welovenature.hostoi.com/page-example/">Page Example</a></li>
</ul></div></div>
			
		</div><!-- .container -->
	</footer>

</div><!-- #main-container -->

<!--<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>-->
<!--<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/@smashingmag.json?callback=twitterCallback2&amp;count=5"></script>-->
</body>
</html>
<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
