<?php 
$contact='current-menu-item';
include 'include/header.php';
?>
    
    
    
    <div id="content-container">
        <div id="content" class="clearfix">
            <div id="main-content">
                <div id="breadcrumbs" class="clearfix">
                    <div itemscope >
                        <a href="index" itemprop="url" class="icon-home">
                            <span itemprop="title">Home</span>
                        </a> <span class="arrow">&gt;</span>
                    </div>  
                    <div itemscope >
                        <a href="#" itemprop="url">
                            <span itemprop="title">Contact Us</span>
                        </a> <span class="arrow">&gt;</span>
                    </div>  
                
                </div>
                <article class="static-page">
                  <h2>Contact Form</h2>
                    <form method="post" action="submitform.php" id="form-contact" class="clearfix" >
                        <div >
                            <label for="text-name">Name <span>*</span></label>
                            <input type="text" name="name" class="input" id="text-name" style="width:100%" required /><br />
                            <label for="text-email">Email <span>*</span></label>
                            <input type="email" name="email" class="input" id="text-email" style="width:100%" required/><br />
                            <label for="text-phone">Phone <span>*</span></label>
                            <input type="text" name="phone" class="input" id="text-phone" style="width:100%" required/><br />
							 <label for="text-phone">Country <span>*</span></label>
                            <input type="text" name="country" class="input"  style="width:100%" required/><br />
							 <label for="text-phone">Qualification <span>*</span></label>
                            <input type="text" name="qualification" class="input"  style="width:100%" required/><br />
                            <label for="text-comment">Message <span>*</span></label>
                            <textarea cols="10" rows="20" class="input textarea" id="text-comment" style="width:100%" name="comment" required></textarea><br />
                            <input type="submit" name="submitcontact" class="button" value="Send Message"  />
                        </div>
                    </form>
            </div>
              <div id="sidebar">
                   <aside class="widget-container">
                    <div class="widget-wrapper clearfix">
				        <h3 class="widget-title">Contact Details</h3>
                        <ul class="menu event-sidebar">			
								    <li class="clearfix">
								      
                                        <div class="event-content-widget">
                                            <article style="line-height:30px">
                                                <h4><a href="#">Foldam Consulting Limited.</a></h4>
                                                <p>4133 Alton Cres Regina SK Canada. </p>
                                                <b >Call:</b > +1 306-450-9376.<br/>
                                                <b>WhatsApp/Viber :</b> +1 306-450-9376.<br/>
                                                <b>E-mail:</b> admin@foldameduc.com.<br/>
                                               
                                            </article>
                                        
                                        </div>
								    </li>
                                  
								</ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    
    
    
    
<?php 
include 'include/footer.php';
?>