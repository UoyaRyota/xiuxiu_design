<?php
/**
 * The page about file
 *
 * This is an exclusive WordPress theme for XIUXIU DESIGN.
 * Basically, the content is created for the purpose of displaying your works and making inquiries
 * We plan to add necessary functions as the version is upgraded.
 *
 * @package WordPress
 * @subpackage Xiuxiu_Design
 * @since xiuxiu design 1.0
 */

get_header();

the_post_thumbnail( $size, $attr );

print 'experience';

$sHtml = "";
$sHtml .= "<p>葉怡秀 YEYIXIU</p>";
$sHtml .= "<p>出生於嘉義縣阿里山鄉，對於能出生在這個豐富的土地，感到非常的慶幸與幸福</p>";
$sHtml .= "<p>每天與大自然朝夕相處，大自然給予的色彩與質地深刻了我成長的每一天。</p>";
$sHtml .= "<p>特別喜歡以純粹的線條、渾然天成的色塊、複合材質、抽象的方式去表達品牌、包裝、視覺等設計，希望透過親手實驗與自身的觀察，創造出令人覺得有趣或溫暖的作品。另外也期許在擁有豐富資源的現代，能透過與各種不同的人與行業合作，玩出不一樣的想法，因設計是共同參與，透過連結而獲得成果。平常的興趣是畫插圖、旅行、攝影、研究印刷與材質、學日文、坐公車寫短文、看奇聞怪談。
</p>";
$sHtml .= "<p>對於設計的想法是，只要能讓人心情變好、覺得有趣、明確的傳達想溝通的即可，特別是在日常可見的事物上，稍做點用心與改變，就會讓人覺得出乎意料的感動，就像是偶爾改變一下平常下班的路線，總能產生很多新的感觸，這是我最近很深的感悟，而這些都是透過生活與觀察累積而來的經驗與直覺。
</p>";
$sHtml .= "<p>若有設計需求，歡迎直接來信詢問。</p>";

print_r($sHtml);

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.


get_footer();

?>







