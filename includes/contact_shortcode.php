<?php
function contact_us($atts, $content = null)
{
  $user_inputs = array(

    'form_title' => '',
    'contactbar_heading' => '',
    'phone_label' => '',
    'phone_number' => '',
    'email_label' => '',
    'email' => '',
    'address_label' => '',
    'address' => '',
    'map_link' => '',
    'contact_form' => ''



  );
  $atts = shortcode_atts($user_inputs, $atts, 'contact');
  extract($atts); // convert associate array into variable and their value
  ob_start();






  ?>










  <!--BIG  Banner  here -->


  <section class="contact-us">
    <div class="container">
      <div class="row">

        <div class="col-lg-12">
          <div class="down-contact">
            <div class="row">
              <div class="col-lg-8">
                <div class="sidebar-item contact-form">
                  <div class="sidebar-heading">
                    <h2>
                      <?php echo esc_html($form_title) ?>
                    </h2>
                  </div>
                  <div class="content">
                    <form id="contact" action="" method="post">
                      <div class="row">

                        <?php
                        echo do_shortcode('[contact-form-7 id="' . $contact_form . '"]');
                        ?>
                      </div>
                    </form>
                  </div>
                </div>
              </div>





              <div class="col-lg-4">
                <div class="sidebar-item contact-information">
                  <div class="sidebar-heading">
                    <h2>
                      <?php echo esc_html($contactbar_heading); ?>
                    </h2>
                  </div>
                  <div class="content">
                    <ul>
                      <li>
                        <h5>
                          <?php echo esc_html($phone_number); ?>
                        </h5>
                        <span>
                          <?php echo esc_html($phone_label); ?>
                        </span>
                      </li>
                      <li>
                        <h5>
                          <?php echo esc_html($email); ?>
                        </h5>
                        <span>
                          <?php echo esc_html($email_label); ?>
                        </span>
                      </li>
                      <li>
                        <h5>
                          <?php echo esc_html($address); ?>
                        </h5>
                        <span>
                          <?php echo esc_html($address_label); ?>
                        </span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div id="map">
            <iframe src=" <?php echo esc_url($map_link); ?>" width="100%" height="450px" frameborder="0" style="border:0"
              allowfullscreen=""></iframe>

          </div>
        </div>
      </div>
    </div>
  </section>





<?php } ?>