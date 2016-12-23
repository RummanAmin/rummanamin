<?php get_header(); ?>

  <div class="band intro">
    <section class="layout">
      <h1>Get ahead</h1>
      <h2><?php echo get_post_meta($post->ID, 'introduction', true); ?></h2>
      <a href="#subscribe" class="button">Subscribe for Updates</a>
      <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/backgrounds/ebook.png">
    </section>
  </div>

  <div class="band ebook ebook-about">
    <section class="layout">
      <div class="ebook-content">
        <h2>Reap the rewards</h2>
        <h3>In your final year and worried about how you'll prioritise your time between your dissertation and modules? Or perhaps you're in school and feeling overwhelmed with revision?</h3>

        <div class="span-split ta-l">
          <article>
            <p>Well, those are the kinds of problems this book was written to solve!</p>
            <p>You'll learn to make slight tweaks to your routine that'll help you stay on top of your work, give you the best chance of remembering important information across the year, and ultimately let you enjoy learning weird and wonderful things.</p>
            <p>You'll learn <em>transferable</em> skills that will not only help you through your studies but will also put you in good stead for your future career as well.</p>
            <a href="#subscribe" class="button">Subscribe for Updates</a>
          </article>
          <article>
            <h4>What you'll learn</h4>
            <ul class="green-list">
              <li>How to cut down projects into smaller chunks</li>
              <li>How to prioritise tasks</li>
              <li>How to scope projects you’ve not done before</li>
              <li>How to deliver projects on time</li>
              <li>How tools like Trello can keep you sane</li>
              <li>How to utilise PM Methodologies</li>
            </ul>
          </article>
        </div>

        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/backgrounds/study.jpg">

        <h3>What's Inside</h3>
        <p>8 Chapters full of theory, examples, tips and tutorials to help you get ahead. <strong>PLUS</strong> a tonne of companion material. You'll realise how a little organisation can go a long way towards a more composed, enjoyable and rewarding way of getting things done.</p>

        <div class="span-split-lists ta-l">
          <ul class="green-list">
            <li>Chapter 1: Introduction</li>
            <li>Chapter 2: Theory</li>
            <li>Chapter 3: Tools</li>
            <li>Chapter 4: Techniques</li>
          </ul>
          <ul class="green-list">
            <li>Chapter 5: Scenarios</li>
            <li>Chapter 6: Putting it all together</li>
            <li>Chapter 7: Resources and Further Reading</li>
            <li>Chapter 8: Glossary</li>
          </ul>
        </div>

        <!-- <ul class="list-grid clearfix">
          <li><img src="/img/backgrounds/Image10.jpg"></li>
          <li><img src="/img/backgrounds/Image10.jpg"></li>
        </ul> -->

        <a href="#subscribe" class="button">Subscribe for Updates</a>
    </section>
  </div>

  <a id="subscribe"></a>
  <div class="band ebook ebook-sample">
    <section class="layout">
      <div class="ebook-content">
        <article>
          <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/backgrounds/Image10.jpg">
        </article>
        <article class="ta-l">
          <!-- <h4>Get the eBook Sample</h4>
          <p>Register your interest below to receive updates, early previews, and a <strong>FREE</strong> Project Management checklist to help you get started.</p>
          <div> -->
          <h4>Subscribe for Updates</h4>
          <p>Register your interest below to receive updates, early previews and a great introductory offer when we launch.</p>
            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
              <form action="//rummanamin.us7.list-manage.com/subscribe/post?u=ba090bbe727834c5b13f46e0f&amp;id=f2c530e56d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                  <div class="mc-field-group">
                  	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                  </label>
                  	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                  </div>
                	<div id="mce-responses" class="clear">
                		<div class="response" id="mce-error-response" style="display:none"></div>
                		<div class="response" id="mce-success-response" style="display:none"></div>
                	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ba090bbe727834c5b13f46e0f_f2c530e56d" tabindex="-1" value=""></div>
                  <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>
              </form>
            </div>
            <!--End mc_embed_signup-->
          </div>
        </article>
      </div>
    </section>
  </div>

  <div class="band ebook ebook-author">
    <section class="layout ebook-content">
      <div class="ebook-content">
      <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/rumman.jpg" id="circle-image">
        <h2>About the Author</h2>
        <h3>My name is Rumman Amin and I'm a Digital Project Manager at Pearson Education, currently managing the Pearson Qualifications Website and Exam Wizard platform.</h3>
        <p class="para-split">Although I've been a Project Manager for 6 years, prior to that, I was a student for almost 15 years - So I know a thing or two about the struggles of being one!
        <br><br>
        Since graduating, I've had the opportunity to manage numerous projects of varying sizes in different industries. Throughout this time, I've been using the same simple tools and techniques to help me manage my tasks, irrespective of the size of a project; and I think these skills will help anyone simplify even the most daunting of challenges.
        <br><br>
        I picked up a lot of what I know from people far more experienced than me. So I've decided It's about time I shared more of my knowledge to help other Project Managers, Developers and anyone who else who's a little stuck like I was.</p>
        <a href="#subscribe" class="button">Subscribe for Updates</a>
      </div>
    </section>
  </div>

  <div class="band ebook ebook-buy">
    <section class="layout ebook-content">
      <article>
        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/backgrounds/ebook.png">
      </article>
      <article class="ta-l">
        <h2>Buy the eBook</h2>
        <p>Thanks for your interest! Unfortunately, I'm still writing the book. Leave me your name and email address and I'll get back to you with a great introductory offer as soon as it's ready to launch!</p>

        <ul class="green-list">
          <li>200 Page eBook</li>
          <li>Step by step tutorials</li>
          <li>Evernote, Trello & Mindmap Templates</li>
          <li>5 free PM Checklists</li>
          <li>14-day money back guarantee</li>
        </ul>
        <a href="#subscribe" class="button">Subscribe for Updates</a>
      </article>
    </section>
  </div>


  <div class="band ebook ebook-faq">
    <section class="layout ebook-content">
      <div class="ebook-content">
        <h2>Frequently Asked Questions</h2>

        <div class="para-split">
          <h5>How does the money back guarantee work?</h5>
          <p>If you’re not completely satisfied, please get in touch, attach your Invoice and I’ll refund your money. No questions asked.</p>

          <h5>What payment options do you accept?</h5>
          <p>I accept PayPal and all major credit cards.</p>

          <h5>How will I receive the eBook after purchase?</h5>
          <p>Right after you buy the eBook you’ll receive an email with a download link. Simply click the link and your browser will automatically download the eBook.</p>

          <h5>What’s the eBook format?</h5>
          <p>The eBook is in PDF format. PDFs are a universal document format that can be opened on almost any device. It'll also ensure the layout is consistent and displayed as designed.</p>

          <h5>Do I need any special software to use the techniques from the eBook?</h5>
          <p>No, you could just as easily follow the steps with just a simple pen and paper. However, there is a chapter on apps that'll no doubt help your efforts so I'd recommend having at least a smartphone/computer at your disposal.</p>

          <h5>When is the most appropriate time to buy the eBook?</h5>
          <p>It doesn't matter if you buy it at the start of the academic year or just before you get stuck in right at the end. Of course, the sooner you buy it, the more prepared you'll be to deal with your work.</p>

          <h5>I need help with something more specific</h5>
          <p>These techniques can be applied to any situation, if you're still not sure then feel free to get in touch and I'll help you where possible.</p>

          <h5>When will the book be released?</h5>
          <p>I'm aiming to launch the book by September 2017, just in time for the start of the new academic year.</p>

          <h5>Is the book available on iTunes, Amazon Bookstore or on Google Play?</h5>
          <p>Yes, the eBook is available in those stores in their respective formats (ePub, Mobi or PDF)</p>
        </div>
      </div>

      <a href="#subscribe" class="button">Subscribe for Updates</a>
    </section>
  </div>

<?php get_footer(); ?>
