<?php
function firstcontact($atts, $content = null)
{
  $args = array(
    'form_title' => '',
    'contact_form' => '',
    'ci' => '',
    'phone_title' => '',
    'phone_number' => '',
    'email_title' => '',
    'email' => '',
    'address_title' => '',
    'address' => '',
    'form'=>'[contact-form-7 id="37168df" title="Contact form 1"]'
  );

  $atts = shortcode_atts($args, $atts, 'contact');
  extract($atts);
  ob_start();
  ?>

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
                      <?php echo esc_html($form_title); ?>
                    </h2>
                  </div>
                  <div class="content">
                    <div id="contact">
                      <div class="row">
                        <?php do_shortcode('$form')?>
                      </div>
                    </div>




                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sidebar-item contact-information">
                <div class="sidebar-heading">
                  <h2>
                    <?php echo esc_html($ci); ?>
                  </h2>
                </div>
                <div class="content">
                  <ul>
                    <li>
                      <h5>
                        <?php echo esc_html($phone_number); ?>
                      </h5>
                      <span>
                        <?php echo esc_html($phone_title); ?>
                      </span>
                    </li>
                    <li>
                      <h5>
                        <?php echo esc_html($email); ?>
                      </h5>
                      <span>
                        <?php echo esc_html($email_title); ?>
                      </span>
                    </li>
                    <li>
                      <h5>
                        <?php echo esc_html($address); ?>
                      </h5>
                      <span>S
                        <?php echo esc_html($address_title); ?>
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
          <iframe
            src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
            width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
      </div>

    </div>
    </div>
  </section>



  <?php


  return ob_get_clean();
}