<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

  <style>
    .hero-slim {
      background-image: url(http://lorempixel.com/600/400/abstract/);
    }
    
    @media screen and (min-width: 800px) {
      .hero-slim {
        background-image: url(http://lorempixel.com/1200/500/abstract/);
      }
    }
</style>

<section class="hero-slim">
  <div class="container">
    <div class="hero-content">
      <div class="hero-content-inner">
        <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
      </div><!--/.hero-content-inner-->
    </div><!--/.hero-content-->
  </div><!--/.container-->
</section><!--/.hero-->

<main id="main" class="main" role="main">
  <div class="container">
    <div class="page-content">
<h2>diam auctor cursus eu ut augue.</h2>
<p>Lorem ipsum dolor <em>sit amet</em>, consectetur adipiscing elit. Nulla sed porttitor ligula. Etiam sed dolor tellus. Proin eu dolor leo. Nullam a risus quis ex dictum aliquet. Aliquam blandit augue vel arcu posuere, sit amet <a href="#">eu sodales neque</a>imperdiet nisi viverra. In id enim id sapien <strong>lacinia hendrerit</strong>. Quisque rhoncus pharetra purus </p>

<?php if( !isset($_GET['contact']) ) {?>

<ul>
  <li>Vivamus sed diam nec</li>
  <li>Lorem ultrices vestibulum</li>
  <li>Rat sit amet sem bi</li>
  <li>Ut volutpat ligula</li>
  <li>Efficitur magna pharetra</li>
</ul>

<p>semper eu. Vivamus sed diam nec ipsum pharetra lobortis. Suspendisse nec leo et arcu finibus accumsan. Nullam scelerisque purus nec est egestas scelerisque. In erat dolor, dignissim id ligula et, fringilla feugiat dui. Nullam pulvinar dui non massa pharetra, ut efficitur augue molestie.</p>

<?php } ?>

<?php if( isset($_GET['contact']) ) {?>

<div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_26"><form method="post" enctype="multipart/form-data" id="gform_26" action="/ux-developer-application-08-2015/">
<div class="gform_heading">
<h3 class="gform_title">Contact Us</h3>
</div>
<div class="gform_body"><ul id="gform_fields_26" class="gform_fields top_label form_sublabel_below description_below"><li id="field_26_1" class="gfield gfield_contains_required field_sublabel_below field_description_below"><label class="gfield_label" for="input_26_1_3">Name<span class="gfield_required">*</span></label><div class="ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix" id="input_26_1">

<span id="input_26_1_3_container" class="name_first">
<input type="text" name="input_1.3" id="input_26_1_3" value="" aria-label="First name">
<label for="input_26_1_3">First</label>
</span>

<span id="input_26_1_6_container" class="name_last">
<input type="text" name="input_1.6" id="input_26_1_6" value="" aria-label="Last name">
<label for="input_26_1_6">Last</label>
</span>

</div></li><li id="field_26_2" class="gfield gfield_contains_required field_sublabel_below field_description_below"><label class="gfield_label" for="input_26_2">Email<span class="gfield_required">*</span></label><div class="ginput_container">
<input name="input_2" id="input_26_2" type="email" value="" class="medium">
</div><div class="gfield_description">So we can contact you back.</div></li><li id="field_26_3" class="gfield gfield_contains_required field_sublabel_below field_description_below"><label class="gfield_label" for="input_26_3">Portfolio URL<span class="gfield_required">*</span></label><div class="ginput_container">
<input name="input_3" id="input_26_3" type="url" value="" class="medium">
</div><div class="gfield_description">Examples of your best front-end development output and UX work.</div></li><li id="field_26_4" class="gfield gfield_contains_required field_sublabel_below field_description_below"><label class="gfield_label" for="input_26_4">Github URL<span class="gfield_required">*</span></label><div class="ginput_container">
<input name="input_4" id="input_26_4" type="url" value="" class="medium">
</div><div class="gfield_description">Code samples of your best front-end development output and UX work.</div></li><li id="field_26_6" class="gfield field_sublabel_below field_description_below"><label class="gfield_label" for="input_26_6">Anything Else You'd Like to Say</label><div class="ginput_container">
<textarea name="input_6" id="input_26_6" class="textarea medium" rows="10" cols="50"></textarea>
</div></li>
</ul></div>
<div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_26" class="gform_button button" value="Apply" onclick="if(window[&quot;gf_submitting_26&quot;]){return false;}  if( !jQuery(&quot;#gform_26&quot;)[0].checkValidity || jQuery(&quot;#gform_26&quot;)[0].checkValidity()){window[&quot;gf_submitting_26&quot;]=true;}  "> 
<input type="hidden" class="gform_hidden" name="is_submit_26" value="1">
<input type="hidden" class="gform_hidden" name="gform_submit" value="26">

<input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
<input type="hidden" class="gform_hidden" name="state_26" value="WyJbXSIsImUwMmM5NzM2MTAzNjA3OTQ1MGEyZWI3MWM0ZWMyMTM4Il0=">
<input type="hidden" class="gform_hidden" name="gform_target_page_number_26" id="gform_target_page_number_26" value="0">
<input type="hidden" class="gform_hidden" name="gform_source_page_number_26" id="gform_source_page_number_26" value="1">
<input type="hidden" name="gform_field_values" value="">

</div>
</form>
</div>

<?php } ?>

<?php if( !isset($_GET['contact']) ) {?>

<h2>diam auctor cursus eu ut augue.</h2>

<p>Sed nec arcu volutpat lorem ultrices vestibulum sit amet at metus. Aliquam lorem lorem, egestas et dapibus ut, blandit non ex. Praesent eget nibh tincidunt diam auctor cursus eu ut augue. Vestibulum molestie in dui ut volutpat. Proin sagittis nibh orci, ac volutpat neque maximus nec. In a purus vehicula velit sollicitudin tempor. Etiam vitae erat sit amet sem bibendum rhoncus. Aliquam ut mattis magna, vehicula sodales purus. Praesent et <a href="#">eu sodales neque</a> congue dolor. Etiam eu justo sit amet purus fermentum volutpat vel sed purus. Nunc magna nibh, gravida in libero sed, ultricies aliquet odio. Vestibulum molestie quam sit amet ipsum tempus, cursus congue orci euismod. Integer ac purus at sem sodales volutpat eu nec risus. Ut volutpat ligula vel massa blandit, non efficitur magna pharetra.</p>

<div id="attachment_16636" class="wp-caption alignleft"><img class="wp-image-16636 size-medium" src="http://lorempixel.com/300/188/abstract/" alt="Dan, Mark and Trish running a Design Sprint" width="300" height="188"><p class="wp-caption-text">image with a caption</p></div>

<h2>diam auctor cursus eu ut augue.</h2>

<p>Vestibulum lorem risus, tincidunt at laoreet sit amet, interdum a magna. Aliquam sed diam vitae tellus semper lobortis non quis dolor. Curabitur euismod semper libero a eleifend. Etiam iaculis luctus erat ac efficitur. Phasellus fermentum sodales mollis. Sed tincidunt lacus convallis lacus semper, dignissim ullamcorper arcu pulvinar. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Aliquam sed diam vitae tellus semper lobortis non <a href="#">eu sodales neque</a> quis dolor. Curabitur euismod semper libero a eleifend. Etiam iaculis luctus erat ac efficitur. Phasellus fermentum sodales mollis. Sed tincidunt lacus convallis lacus semper, dignissim ullamcorper arcu pulvinar. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

<h3>Hello</h3>

<p>Vestibulum lorem risus, tincidunt at laoreet sit amet, interdum a magna. Aliquam sed diam vitae tellus semper lobortis non quis dolor. Curabitur euismod semper libero a eleifend. Etiam iaculis luctus erat ac efficitur. Phasellus fermentum sodales mollis. Sed tincidunt lacus convallis lacus semper, dignissim ullamcorper arcu pulvinar. </p>

<h3>Hello</h3>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Aliquam sed diam vitae tellus semper lobortis non <a href="#">eu sodales neque</a> quis dolor. Curabitur euismod semper libero a eleifend. Etiam iaculis luctus erat ac efficitur. Phasellus fermentum sodales mollis. Sed tincidunt lacus convallis lacus semper, dignissim ullamcorper arcu pulvinar. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

<?php } ?>

    </div><!--/.page-content-->
  </div><!--/.container-->
</main><!--/.main-->

<?php include 'includes/footer.php'; ?>