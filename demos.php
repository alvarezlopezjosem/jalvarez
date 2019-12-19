<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="expires" content="0" />
    <meta name="author" content="Jose M. Alvarez" />
    <meta name="description" content="José M. Álvarez's homepage">
<meta name="keywords" lang="en" content="Jose M., Alvarez, Jose M. Alvarez,  Lopez, intelligent vehicles, geometric layout, road scene segmentation, semantic segmentation, computer, vision, road, detection, publications, projects, dental, surgery, Computer Vision, ADAS, Driver, Driver Assistance Systems, Image PRocessing, Road, Detection, Photometric, Invariant, Invariance, Color, Volumeter, Road Detection, Road      Segmentation, Autonomous Driving, CVPR, 3d Scene Priors for Road Detection, GPS Navigation, Road Detection, Road Scene Understanding, Photometric Invariants">
  <link rel="stylesheet" type="text/css" href="./website/style.css" />
<title>Jose M. Alvarez</title>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_CheckFlashVersion(reqVerStr,msg){
  with(navigator){
    var isIE  = (appVersion.indexOf("MSIE") != -1 && userAgent.indexOf("Opera") == -1);
    var isWin = (appVersion.toLowerCase().indexOf("win") != -1);
    if (!isIE || !isWin){  
      var flashVer = -1;
      if (plugins && plugins.length > 0){
        var desc = plugins["Shockwave Flash"] ? plugins["Shockwave Flash"].description : "";
        desc = plugins["Shockwave Flash 2.0"] ? plugins["Shockwave Flash 2.0"].description : desc;
        if (desc == "") flashVer = -1;
        else{
          var descArr = desc.split(" ");
          var tempArrMajor = descArr[2].split(".");
          var verMajor = tempArrMajor[0];
          var tempArrMinor = (descArr[3] != "") ? descArr[3].split("r") : descArr[4].split("r");
          var verMinor = (tempArrMinor[1] > 0) ? tempArrMinor[1] : 0;
          flashVer =  parseFloat(verMajor + "." + verMinor);
        }
      }
      // WebTV has Flash Player 4 or lower -- too low for video
      else if (userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 4.0;
 
      var verArr = reqVerStr.split(",");
      var reqVer = parseFloat(verArr[0] + "." + verArr[2]);
   
      if (flashVer < reqVer){
        if (confirm(msg))
          window.location = "http://www.macromedia.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash";
      }
    }
  } 
}
</script>
</head>
<body>
  <div id="wrapper">
      <div id="banner"><img src="header2.png" alt="Jose M. Alvarez" width="1040" height="80" longdesc="Jose Alvarez, research">       
        <div class="subheader">
          <h2>Deep Learning and Computer Vision for Autonomous Driving</h2>
          <p>Senior Research Scientist</p>
        </div>
      </div>
<div id="container">    
<div id="horizontallineShort">
</div>
   
 
 <div id="sidebar">      
        <ul id="navigation">
          <li><a class="menu" href="./">Home</a></li>
          <li><a class="menu" href="./pubs.php">Publications</a></li>
          <li><a class="menu" rel="author"  type="text/html" href="./demos.php">Demos</a></li>
          <li><a class="menu" href="./research_bbdd.php">Databases & Code</a></li>          
          <li><a class="menu" href="./students.html">Students</a></li>
          <li><a class="menu" href="./pactivities.html">Prof. Activities</a></li>
  <li><a class="menu" href="./website/JMAlvarezW.pdf" target="_blank">Curriculum Vitae</a></li>
  <li><a class="menu" href="./contact.php">Contact</a></p></li>
        </ul>   
</div>
<div id="main">
<h2>Demos</h2>
    <DemoTitle>Real Time Semantic Segmentation using Efficient Networks</span></DemoTitle>
    <table cellspacing="17" cellpadding="0">
    <tr>
      <td valign="top">
 
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="640" height="368" id="FLVPlayer">
      <param name="movie" value="FLVPlayer_Progressive.swf" />
      <param name="salign" value="lt" />
      <param name="quality" value="high" />
      <param name="scale" value="noscale" />
      <param name="FlashVars" value="&MM_ComponentVersion=1&skinName=Clear_Skin_1&streamName=website/IV2017_0306_VD_i&autoPlay=true&autoRewind=false" />
      <embed src="FLVPlayer_Progressive.swf" flashvars="&MM_ComponentVersion=1&skinName=Clear_Skin_1&streamName=website/IV2017_0306_VD_i&autoPlay=true&autoRewind=false" quality="high" scale="noscale" width="480" height="276" name="FLVPlayer" salign="LT" type="applic$
</object>         
      </td>
<td valign="top" align="justify">
<p> An Efficient Network for real time semantic segmentation (even in embedded platforms). A join work with Eduardo Romera and Luis M. Bergasa.<p>
    </td>
</tr>
<table cellspacing="17" cellpadding="0">
    <tr>
      <td>
          <div id="div" align="justify">
          <p><span style="font-weight: bold; font-family: DejaVu Sans Mono;">Related Publications</span></p>
        </div>
 </td>
    </tr>
</table>
<p>Romera, Alvarez, Bergasa and Arroyo. Efficient ConvNets for Real-Time Semantic Segmentation. IV'2017.</p>
 
  <div id="horizontallineTiny">
</div>
<p>&nbsp;</p>
 
 
 
      <DemoTitle>Large-Scale Scene Classification in Embedded Platforms (NVIDIA TX-1)</span></DemoTitle>
    <table cellspacing="17" cellpadding="0">
    <tr>
      <td valign="top">
 
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="640" height="368" id="FLVPlayer">
      <param name="movie" value="FLVPlayer_Progressive.swf" />
      <param name="salign" value="lt" />
      <param name="quality" value="high" />
      <param name="scale" value="noscale" />
      <param name="FlashVars" value="&MM_ComponentVersion=1&skinName=Clear_Skin_1&streamName=website/imagenetrt&autoPlay=true&autoRewind=false" />
      <embed src="FLVPlayer_Progressive.swf" flashvars="&MM_ComponentVersion=1&skinName=Clear_Skin_1&streamName=website/imagenetrt&autoPlay=true&autoRewind=false" quality="high" scale="noscale" width="480" height="276" name="FLVPlayer" salign="LT" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />    
</object>   
      </td>
<td valign="top" align="justify">
<p> A compact ConvNet running at real-time (65fps +) in an embedded platform. A join work with Lars Andersson and Lars Petersson.<p>
    </td>
</tr>
<table cellspacing="17" cellpadding="0">
    <tr>
      <td>
      <div id="div" align="justify">
          <p><span style="font-weight: bold; font-family: DejaVu Sans Mono;">Related Publications</span></p>
        </div>
 </td>
    </tr>
</table>
<p>Jos&eacute M. &Aacutelvarez and Lars Petersson. DecomposeMe: Simplifying ConvNets for end to end Learning. In Arxiv.</p>
     
  <div id="horizontallineTiny">
</div>
<p>&nbsp;</p>
 
 
 
 
 <DemoTitle>Unsupervised Image Transformation for Outdoor Semantic Labelling</span></DemoTitle>
  <table cellspacing="17" cellpadding="0">
    <tr>
      <td valign="top">
        <img src="website/imgTransform/imgTrf.jpg" alt="Unsupervised Image Transform for Outdoor Semantic Labelling" width="796" height="264" border="0" />              </td>                         
    </tr>
</table>      
  <table cellspacing="17" cellpadding="0">
    <tr>
      <td>
      <div id="div" align="justify">
          <p><span style="font-weight: bold; font-family: DejaVu Sans Mono;">Related Publications</span></p>
        </div>
 </td>
    </tr>
     
  </table>
 <p>German Ros and Jos&eacute M. &Aacutelvarez. <a href="website/imgTransform/UnsupervisedImageTransformationforOutdoorSemanticLabelling.pdf">Unsupervised Image Transformation for Outdoor Semantic Labelling</a>. In IEEE-IV 2015.</p>
   
    <div id="horizontallineTiny">
</div>
<p>&nbsp;</p>
 
 
      <DemoTitle>Large-Scale Semantic Co-Labeling of Image Sets</span></DemoTitle>
<img src="website/cosegment/wacv2014_MSRC.png" alt="MSRC21" width="829" height="175" longdesc="MSRC comparison" />
    <table cellspacing="17" cellpadding="0">
    <tr>
      <td valign="top">
 
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="640" height="368" id="FLVPlayer">
      <param name="movie" value="FLVPlayer_Progressive.swf" />
      <param name="salign" value="lt" />
      <param name="quality" value="high" />
      <param name="scale" value="noscale" />
      <param name="FlashVars" value="&MM_ComponentVersion=1&skinName=Clear_Skin_1&streamName=website/cosegment/LargeScaleSemanticColabeling&autoPlay=true&autoRewind=false" />
      <embed src="FLVPlayer_Progressive.swf" flashvars="&MM_ComponentVersion=1&skinName=Clear_Skin_1&streamName=website/cosegment/LargeScaleSemanticColabeling&autoPlay=true&autoRewind=false" quality="high" scale="noscale" width="480" height="276" name="FLVPlayer" salign="LT" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />    
</object>   
      </td>
<td valign="top" align="justify">
    </td>
</tr>
<table cellspacing="17" cellpadding="0">
    <tr>
      <td>
      <div id="div" align="justify">
          <p><span style="font-weight: bold; font-family: DejaVu Sans Mono;">Related Publications</span></p>
        </div>
 </td>
    </tr>
     
</table>
<p>Jos&eacute M. &Aacutelvarez,<a href="http://www.nicta.com.au/people/msalzmann" target="_blank"> Mathieu Salzmann</a> and Nick Barnes. Large-Scale Semantic Co-Labeling of Image Sets. In WACV'14.</p>
     
    <p>&nbsp;</p>
    
      
     
    <div id="horizontallineTiny">
</div>
 <p>&nbsp;</p>
   
   
   
   
    <DemoTitle>Road Scene Understanding from a Single Image</span></DemoTitle>
    <!--<p>José M. Álvarez , Yann LeCun, Theo Gevers and Antonio Lopez.</p>-->
    <table cellspacing="17" cellpadding="0">
    <tr>
      <td valign="top">
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="490" height="360" id="FLVPlayer1">
      <param name="movie" value="FLVPlayer_Progressive.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="scale" value="noscale" />
      <param name="salign" value="lt" />
      <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=website/AlvarezECCV2012_1&amp;autoPlay=true&amp;autoRewind=false" />
      <param name="swfversion" value="8,0,0,0" />
      <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="490" height="360">
        <!--<![endif]-->
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="scale" value="noscale" />
        <param name="salign" value="lt" />
        <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=website/AlvarezECCV2012_1&amp;autoPlay=true&amp;autoRewind=false" />
        <param name="swfversion" value="8,0,0,0" />
        <param name="expressinstall" value="Scripts/expressInstall.swf" />
        <div>
          <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" /></a></p>
        </div>    
      </object>
    </object>
      </td>
<td valign="top" align="justify">
              <p> A Convolutional Neural network is trained using a large dataset with machine-generated labels (weak ground truth). These labels are generated using a general algorithm. The algorithm shows how convolutional neural networks can generalize from these weakly annotated data.
    <p>
      </td>
</tr>
<table cellspacing="17" cellpadding="0">
    <tr>
      <td>
      <div id="div" align="justify">
          <p><span style="font-weight: bold; font-family: DejaVu Sans Mono;">Related Publications</span></p>
        </div>
 </td>
    </tr>
     
</table>
  <p>Jose M. Alvarez, Theo Gevers, Yann LeCun and Antonio M. Lopez, <a href="http://yann.lecun.com/exdb/publis/pdf/alvarez-eccv-12.pdf" target="_blank" >Road Scene Understanding from a Single Image</a>. European Conference Computer Vision (ECCV 2012)</p>
    <p>&nbsp;</p>
     
     
    <div id="horizontallineTiny">
</div>
<p>&nbsp;</p>
    <DemoTitle>Combining Priors, Color and Context for Road Detection</span></DemoTitle>
    <p>Jos&eacute M. &Aacutelvarez, Antonio M. L&oacutepez, Theo Gevers and Felipe Lumbreras.</p>
    <table cellspacing="17" cellpadding="0">
    <tr>
     <td valign="top">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="490" height="360" id="FLVPlayer">
    <param name="movie" value="FLVPlayer_Progressive.swf" />
    <param name="salign" value="lt" />
    <param name="quality" value="high" />
    <param name="scale" value="noscale" />
    <param name="FlashVars" value="&MM_ComponentVersion=1&skinName=Clear_Skin_1&streamName=website/RD/onlinepriors&autoPlay=true&autoRewind=true" />
    <embed src="FLVPlayer_Progressive.swf" flashvars="&MM_ComponentVersion=1&skinName=Clear_Skin_1&streamName=website/RD/onlinepriors&autoPlay=true&autoRewind=true" quality="high" scale="noscale" width="490" height="360" name="FLVPlayer" salign="LT" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />    
</object>
    </td>
 
 </td>
<td valign="top" align="justify">
               
    </td>
    </tr>
     
     
<table cellspacing="17" cellpadding="0">
    <tr>
      <td>
      <div id="div" align="justify">
          <p><span style="font-weight: bold; font-family: DejaVu Sans Mono;">Related Publications</span></p>
        </div>
 </td>
    </tr>
     
</table>
 <p>Jos&eacute M. &Aacutelvarez, Antonio M. Lopez, Theo Gevers and Felipe Lumbreras. Combining Priors, Color and Context for Road Detection. IEEE Trans. Intelligent Transportation Systems (ITS), to appear.</p>
<p>&nbsp;</p>
  <p>Jos&eacute M. &Aacutelvarez, Felipe Lumbreras, Theo Gevers and Antonio M. L&oacutepez. Geographic Information for Vision-Based Road Detection. IEEE Intelligent Vehicle Symposium (IV'10), San Diego, CA. 2010.</p>
    <p>&nbsp;</p>
  
<p> <a href="http://worldwide.espacenet.com/publicationDetails/biblio?DB=EPODOC&amp;II=0&amp;ND=3&amp;adjacent=true&amp;locale=en_EP&amp;FT=D&amp;date=20111229&amp;CC=WO&amp;NR=2011160672A1&amp;KC=A1" title="Method for Obtaining Drivable Road Area">Method for Obtaining Drivable Road Area.</a> Jos&eacute M. &Aacutelvarez and Felipe Lumbreras.</p>
    <p>&nbsp;</p>
 
 
<div id="horizontallineTiny">
</div>
      
    <p>&nbsp;</p>
     
    <DemoTitle>Road Detection Based on Illuminant Invariance</DemoTitle>
    <p>Jose M. Alvarez and Antonio M. Lopez</p>
 
  <table cellspacing="17" cellpadding="0">
    <tr>
      <td valign="top">
       
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="260" height="236" id="FLVPlayer2">
        <param name="movie" value="FLVPlayer_Progressive.swf" />
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="scale" value="noscale" />
        <param name="salign" value="lt" />
        <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=website/illuminant_invariant_road_detection_1&amp;autoPlay=true&amp;autoRewind=true" />
        <param name="swfversion" value="8,0,0,0" />
 
        <param name="expressinstall" value="Scripts/expressInstall.swf" />
        <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="260" height="236">
 
          <param name="quality" value="high" />
          <param name="wmode" value="opaque" />
          <param name="scale" value="noscale" />
          <param name="salign" value="lt" />
          <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=website/illuminant_invariant_road_detection_1&amp;autoPlay=true&amp;autoRewind=true" />
          <param name="swfversion" value="8,0,0,0" />
          <param name="expressinstall" value="Scripts/expressInstall.swf" />
 
          <div>
            <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" /></a></p>
          </div>
 
        </object>
 
      </object><a href="website/ITS2010/JMAlvarezvideodemo1.pdf" target="_blank"><span style="font-family: DejaVu Sans Mono;"><img src="website/invariant_road_detection_rain.JPG" alt="Road detection results rainy day" width="159" height="73" style="border: 0px solid; width: 120px; height: 57px;"> </span></a><a href="website/ITS2010/JMAlvarezvideodemo2.pdf" target="_blank"><img src="website/invariant_road_detection_1.JPG" alt="Road detection results sunny day" width="159" height="182" style="border: 0px solid; width: 120px; height: 57px;"></a>        </td>
      <td valign="top" align="justify">
      
<p>
            By using an on-board camera it is possible to detect the free road surface ahead of the ego-vehicle. Road detection is of high relevance for autonomous driving, road departure warning and to support driver assistance systems such as vehicle and pedestrian detection. The key for vision-based road detection is the ability to classify image pixels as belonging or not to the road surface.
            Identifying road pixels is a major challenge due to the intra-class variability caused by lighting conditions. An especially difficult scenario appears when the road surface has both shadowed and non--shadowed areas. Accordingly, we propose a novel approach to vision-based road detection that is robust to shadows. The novelty of our approach relies on using a shadow invariant feature space combined with a model--based classifier The model is built on-line to improve the adaptability of the algorithm to the current lighting and the presence of other vehicles in the scene. The proposed algorithm works in still images and does not depend either on road shape or temporal restrictions. Quantitative and qualitative results are presented to support the validity of our proposal.       <p></td>
    </tr>
     
  </table>
  <DemoTitle>
    <div align="center">Code and the Road Database with manually annotated ground truth is available in the <a href="research_bbdd.php">database section</a>.</div>
  </DemoTitle>
  <table cellspacing="17" cellpadding="0">
    <tr>
      <td>
      <div id="div" align="justify">
          <p><span style="font-weight: bold; font-family: DejaVu Sans Mono;">Related Publications</span></p>
        </div>
 </td>
    </tr>
     
  </table>
  <p>Jose M. Alvarez and Antonio M. Lopez, <a href="Road_Detection_Basedon_Photometric_Invariance.pdf">Road Detection based on Illuminant Invariance</a>. <a href="http://ieeexplore.ieee.org/xpl/RecentIssue.jsp?punumber=6979" target="_blank"> IEEE Trans. Intelligent Transportation Systems (ITS)</a>.</p>
    <p>Jose M. Alvarez and Antonio M. Lopez and R. Baldrich, <a href="website/Illuminant_Invariant_Model_Based_Road_Segmentation.pdf" target="_blank">Illuminant Invariant Model-Based Road Segmentation.</a> IEEE Intelligent Vehicles Symposium (IV'08).</p>
    <p>&nbsp;</p>
<div id="horizontallineTiny">
</div>
    <p>&nbsp;</p>
    <DemoTitle>Learning Photometric Invariants for Road Detection</span></DemoTitle>
    <p>Jos&eacute M. &Aacutelvarez, Theo Gevers and Antonio M. L&oacutepez.</p>
 
  <table cellspacing="17" cellpadding="0">
    <tr>
      <td valign="top">
        <img src="website/LearningInvariance/Learning_invariance_road_detection.jpg" alt="Learning photometric (illuminant) invariance Road detection" width="393" height="264" border="0" />            </td>                         
      <td valign="top" align="justify">    
<p>
           <img src="website/LearningInvariance/Road_detection_results.jpg" alt="Road detection results" width="348" height="263" />       
<p></td>
     
    </tr>
</table>   
    <p>
    
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="780" height="297" id="FLVPlayer">
      <param name="movie" value="FLVPlayer_Progressive.swf" />
      <param name="salign" value="lt" />
      <param name="quality" value="high" />
      <param name="scale" value="noscale" />
      <param name="FlashVars" value="&MM_ComponentVersion=1&skinName=Clear_Skin_1&streamName=website/LearningInvariance/RD_Photometric&autoPlay=false&autoRewind=false" />
      <embed src="FLVPlayer_Progressive.swf" flashvars="&MM_ComponentVersion=1&skinName=Clear_Skin_1&streamName=website/LearningInvariance/Road_Detection_using_invariance&autoPlay=false&autoRewind=false" quality="high" scale="noscale" width="780" height="297" name="FLVPlayer" salign="LT" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />      
</object>
  </p>
  <table cellspacing="17" cellpadding="0">
    <tr>
      <td>
      <div id="div" align="justify">
          <p><span style="font-weight: bold; font-family: DejaVu Sans Mono;">Related Publications</span></p>
        </div>
 </td>
    </tr>
     
  </table>
 <p>Jos&eacute M. &Aacutelvarez, Theo Gevers and Antonio M. L&oacutepez. <a href="website/Learning_Photometric_Invarianc_color_object_detection.pdf">Learning Photometric Invariance for Object Detection</a>. In <a href="http://www.springerlink.com/content/41324j6211g812k7/" target="_blank">International Journal of Computer Vision</a> Volume 90, Number 1, 45-6, 2010.</p>
   
  <p>Jos&eacute M. &Aacutelvarez, Theo Gevers and Antonio M. Lopez. Learning Photometric Invariance from Diversified Color Model Ensembles. In Proc. IEEE Int. Conf. on Computer Vision and Pattern Recognition (CVPR'09), Miami, Fl 2009.</p>
  
  
  <div id="horizontallineTiny">
</div>
    <p>&nbsp;</p>
    <DemoTitle>Computer-Aided System for Morphometric Mandibular Index Computation (using dental panoramic radiographs)</span></DemoTitle>
    <p>Jos&eacute M. &Aacutelvarez and Jose L&oacutepez-L&oacutepez.</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div align="center"><a href="research_med.php">Visit the webpage of the project</a>.</div>
  <table cellspacing="17" cellpadding="0">
    <tr>
      <td>
      <div id="div" align="justify">
          <p><span style="font-weight: bold; font-family: DejaVu Sans Mono;">Related Publications</span></p>
        </div>
 </td>
    </tr>
     
  </table>
 <p>"J. L&oacutepez-L&oacutepez, Jose M. Alvarez, E. Jan&eacute-Salas, A. Estrugo-Devesa, R. Ayuso-Montero, E. Velasco-Ortega, Computer-Aided System for Morphometric Mandibular Index Computation (using dental panoramic radiographs). Dentistry, Oral Surgery & Medicine</p>
   
 
 <div id="horizontallineTiny">
</div>
    <p>&nbsp;</p>
    <DemoTitle>Dynamic Comparison of Headlights</span></DemoTitle>
    <p>J. Serrat, F. Diego, F. Lumbreras, Jos&eacute M. &Aacutelvarez and Antonio M. L&oacutepez.</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div align="center"><a href="http://www.cvc.uab.es/adas/projects/sincro/JAE/" target="_blank">Visit the webpage of the project</a>.</div>
  <table cellspacing="17" cellpadding="0">
    <tr>
      <td>
      <div id="div" align="justify">
          <p><span style="font-weight: bold; font-family: DejaVu Sans Mono;">Related Publications</span></p>
        </div>
 </td>
    </tr>
     
  </table>
 <p>J. Serrat, F. Diego, F. Lumbreras, Jos&eacute M. &Aacutelvarez, Antonio M. L&oacutepez and C. Elvira. <strong>Dynamic comparison of headlights</strong>. In Jourmal of Automobile Engineering, Proc. of the Institution of Mechanical Engineers, Part D, June 2007</p>
   
 
</div>
 
 <div id="footer">
 
<p class="copyright"> &copy; 2014 Jos&eacute M. &Aacutelvarez. All Rights Reserved.</p>
      </div>
 
 
</div>
 </div>
 
 
 
 
<p class=MsoNormal><span lang=ES-TRAD style='color:white;mso-ansi-language:
ES-TRAD'><o:p>&nbsp;</o:p></span></p>
</div>
<a title="tumblr site counter"
href="http://www.statcounter.com/tumblr/"
target="_blank"><img
src="http://c.statcounter.com/6053472/0/3500293f/1/"
alt="tumblr site counter"
border="0"></a>
<script type="text/javascript">
swfobject.registerObject("FLVPlayer1");
swfobject.registerObject("FLVPlayer2");
swfobject.registerObject("FLVPlayer3");
</script>
</body>
</html>