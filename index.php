<?php
use \Tsugi\Util\Net;
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

// Help the installer through the setup process
require "check.php" ;

require "top.php";
require "nav.php";

// Help the installer through the setup process
require_once "tsugi/admin/sanity-db.php";
?>
<div id="container">
<div style="margin-left: 10px; float:right">
<iframe width="400" height="225" src="" frameborder="0" allowfullscreen></iframe>
</div>
<div id="grid-container" style="display: grid; grid-template-columns: 15% 85%;">
<img src="https://image.dig4e.com/images/imaginglogo.png" alt="Dig4E Imaging Logo" style = "width: 8em; height: 8em; grid-column: 1/2; border: 10 px; margin: 20px;"/>
<h1 style="color: #0D805B; font-weight: 600; font-family: Raleway, Sans-Serif; font-size: 3em;grid-column: 2/2; padding-top: 1em; padding-left: 1em;">Digitization for Everybody - Audio</h1>
</div>
<div id="container" style="dispalay: container; background-color: #0D805B; height: 1em; margin-top: 1em; margin-bottom: 1em;">
</div>
<div id="container" style= "color: #555555; font-family: Lusitana, Serif; font-weight: 500; font-size: 18px; margin-bottom: 1em;" >
In the Dig4E Audio module, you learn about the present state of standards and recommended best practices for the digital re-recording of analog audio signals stored on magnetic tape. In most cases, the underlying technical standards for audio digitization are stable and complete, although professionals debate how to apply the standards to a wide variety of audio media. For the vast majority of the audio holdings in cultural heritage organizations, archival quality digitization is technically and administratively feasible.</div>
<div id="container" style="dispalay: container; background-color: #0D805B; height: 1em; margin-top: 1em; margin-bottom: 1em;">
</div>
<div id="grid-container" style="display: grid; grid-template-columns: 30% 70%;">
<iframe width="300" height="200" src="https://www.youtube.com/embed/XHOmBV4js_E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p style="color: #555555; font-family: Lusitana, Serif; font-weight: 500; font-size: 18px;grid-column: 2/2; padding-top: 1em;">This video introduces the Audio module in the broader context of the risks and challenges to audio heritage. The primary points are the consequences of inaction, the critical value of digital processes for rescuing audio content, and the complexities of legacy playback. The video also introduces the top level learning goals for the Audio module.</p>
</div>
<div id="container" style="dispalay: container; background-color: #0D805B; height: 1em; margin-top: 1em; margin-bottom: 1em;">
</div>
<div id="grid-container" style ="display: grid; grid-template-columns: 50% 50%; grid-row-gap: 1em;" hover="background-color: rgba(158, 79, 0, 0.2);">
<a href="https://image.dig4e.com/lessons"><img src="https://image.dig4e.com/images/lessons.png" alt="Lessons Logo" style= "width: 10em; height 10em; position: inline; margin-left: 35%; margin-right: 35%; hover: #9E4F002E"/></a>
<a href="https://image.dig4e.com/assignments"><img src="https://image.dig4e.com/images/quizzes.png" alt="Quizzes Logo" style= "width: 10em; height 10em; position: inline; margin-left: 35%; margin-right: 50%;"/></a>
<a href="https://image.dig4e.com/lessons" style="color: #00274C; font-family: Raleway, Sans-Serif; font-weight: 500; font-size: 2em; position: inline; margin-left: 39%; margin-right: 46%; grid-column: 1; grid-row: 2">Lessons</a>
<a href="https://image.dig4e.com/assignments" style="color: #00274C; font-family: Raleway, Sans-Serif; font-weight: 500; font-size: 2em; position: inline; margin-left: 39%; margin-right: 46%; grid-column: 2; grid-row: 2">Quizzes</a>
</div>
<?php if ( isset($_SESSION['id']) ) { ?>
<?php } else { ?>
<?php } ?>
<!--
<?php
echo("IP Address: ".Net::getIP()."\n");
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
</div>
<?php
require "foot.php";
