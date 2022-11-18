@extends('layout.master')
@section('title')
gggggggg

@endsection
@section('css')
<link rel="stylesheet" href="album/style.css">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type="text/css">
     <style>
      h1,
      h2,
      h3,
      h4 {
        /* The font-family style will apply our font 'Indie Flower' to the headings.*/
        font-family: 'Indie Flower', cursive;
      }

    </style>
@endsection
@section('content')
@parent

    <!--
        We start with a header tag, this defines the content for the header of the page.
    -->
    <header>
      <div class="wrapper group">
        <!--
                This is a <h1> Heading. We have created a simple logo by using CSS3 borders. You can change the CSS to create an alternate logo
                or you could try replacing the logo with an image.
            -->
        <h1 class="logo">My summer</h1>


        <!--
                This is a <h2> Heading.  It is an important tag on the page but not as important as the main <h1>.
                The heading order goes from <h1> being the most important to <h6> being the least important.

                Try changing the text to name your page.
            -->
        <h2 class="title">Photo album</h2>
      </div>
    </header>

    <div class="wrapper group">

      <section id="content">
        <!--
                Photos are inside an unordered list (ul).
                It behaves much like an ordered list but is more appropriate here because the order of the photos is unimportant.
                The images are placed inside individual list items (li).
                As the images are wrapped inside a link <a> tag they are clickable.  When clicked they will go to the address in the 'href' of the <a> tag.

                Task 2) - Add some more images to your gallery.
                ****************************************************************************

                It's really easy to add some more photos to your gallery. Just copy the the <li></li> tags below (including the content inside) and paste under the last <li></li> tag.
                When you've done that make sure to change the link and image src. We've explained what you need to do below:

            -->
        <ul class="grid half-width group">

          <!--
                    The picture below is contained in a <li> which h
                -->
          <li class="zoom-on-hover">
            <!--
                        <a> This is a link tag. It creates a link to another page on the internet.
                        If you want to change where the link goes just paste the new link between the "" below.
                    -->
            <a href="http://www.flickr.com/photos/84923476@N00/309452844/">
              <div class="image">
                <!--
                               <img> This is the img tag. We are using images from flickr but you could use images
                               from nearly anywhere online. If you have your own Flickr or Instagram account then you can use those.
                               Just change the 'src' below to point to your image.
                            -->
                <img src="http://farm1.staticflickr.com/111/309452844_365dd1a323_n.jpg">
                <div class="caption">
                  <h2>Beach Gazebo</h2>
                </div>
              </div>
            </a>
          </li>

          <!--
                    A picture
                -->
          <li class="zoom-on-hover">
            <a href="http://www.flickr.com/photos/john-baldeagle/8882967944/">
              <div class="image">
                <img src="http://farm4.staticflickr.com/3566/3768932483_962064e6d8_n.jpg">
                <div class="caption">
                  <h2>Beach huts</h2>
                </div>
              </div>
            </a>
          </li>

          <!--
                    A picture
                -->
          <li class="zoom-on-hover">
            <a href="http://www.flickr.com/photos/33887484@N08/3180227438/">
              <div class="image">
                <img src="http://farm4.staticflickr.com/3481/3180227438_983331494a_n.jpg">
                <div class="caption">
                  <h2>Beach Cozumel</h2>
                </div>
              </div>
            </a>
          </li>

          <!--
                    A picture
                -->
          <li class="zoom-on-hover">
            <a href="http://www.flickr.com/photos/46857557@N00/98545348/">
              <div class="image">
                <img src="http://farm1.staticflickr.com/37/98545348_a87b3ca842_n.jpg">
                <div class="caption">
                  <h2>Beach Sunrise</h2>
                </div>
              </div>
            </a>
          </li>
        </ul>

      </section>

    </div>

    <!--
        This is the footer of the page.
        We have used it to credit the sources of the content on this page
        if they haven't been credited elsewhere. To be a good net citizen
        you should do the same :)
    -->
    <footer>
      <div class="footer-wrap">
        <small>All images taken from <a href="http://www.flickr.com">Flickr</a></small> and linked to the source image.
      </div>
    </footer>
@endsection

