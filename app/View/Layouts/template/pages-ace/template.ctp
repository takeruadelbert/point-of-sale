<div class="page-content">
    <!-- Page header -->
    <div class="page-header">
        <div class="page-title">
            <h3>Dashboard <small>Welcome Eugene. 12 hours since last visit</small></h3>
        </div>
        <div id="reportrange" class="range">
            <div class="visible-xs header-element-toggle"><a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a></div>
            <div class="date-range"></div>
            <span class="label label-danger">9</span>
        </div>
    </div>
    <!-- /page header -->
    <!-- Breadcrumbs line -->
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Dashboard</li>
        </ul>
        <div class="visible-xs breadcrumb-toggle"><a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a></div>
        <ul class="breadcrumb-buttons collapse">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search3"></i> <span>Search</span> <b class="caret"></b></a>
                <div class="popup dropdown-menu dropdown-menu-right">
                    <div class="popup-header"><a href="#" class="pull-left"><i class="icon-paragraph-justify"></i></a><span>Quick search</span><a href="#" class="pull-right"><i class="icon-new-tab"></i></a></div>
                    <form action="#" class="breadcrumb-search">
                        <input type="text" placeholder="Type and hit enter..." name="search" class="form-control autocomplete">
                        <div class="row">
                            <div class="col-xs-6">
                                <label class="radio">
                                    <input type="radio" name="search-option" class="styled" checked="checked">
                                    Everywhere</label>
                                <label class="radio">
                                    <input type="radio" name="search-option" class="styled">
                                    Invoices</label>
                            </div>
                            <div class="col-xs-6">
                                <label class="radio">
                                    <input type="radio" name="search-option" class="styled">
                                    Users</label>
                                <label class="radio">
                                    <input type="radio" name="search-option" class="styled">
                                    Orders</label>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-block btn-success" value="Search">
                    </form>
                </div>
            </li>
            <li class="language dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $this->Template->img("images/flags/german.png", array("alt" => "", "class" => "")) ?> <span>German</span> <b class="caret"></b></a>
                <ul class="dropdown-menu dropdown-menu-right icons-right">
                    <li><a href="#"><?= $this->Template->img("images/flags/ukrainian.png", array("alt" => "", "class" => "")) ?> Ukrainian</a></li>
                    <li class="active"><a href="#"><?= $this->Template->img("images/flags/english.png", array("alt" => "", "class" => "")) ?> English</a></li>
                    <li><a href="#"><?= $this->Template->img("images/flags/spanish.png", array("alt" => "", "class" => "")) ?> Spanish</a></li>
                    <li><a href="#"><?= $this->Template->img("images/flags/german.png", array("alt" => "", "class" => "")) ?> German</a></li>
                    <li><a href="#"><?= $this->Template->img("images/flags/hungarian.png", array("alt" => "", "class" => "")) ?> Hungarian</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /breadcrumbs line -->
    <!-- Default info blocks -->
    <ul class="info-blocks">
        <li class="bg-primary">
            <div class="top-info"><a href="#">Add new post</a><small>post management</small></div>
            <a href="#"><i class="icon-pencil"></i></a><span class="bottom-info bg-danger">12 drafts in progress</span></li>
        <li class="bg-success">
            <div class="top-info"><a href="#">Site parameters</a><small>layout settings</small></div>
            <a href="#"><i class="icon-cogs"></i></a><span class="bottom-info bg-primary">No updates</span></li>
        <li class="bg-danger">
            <div class="top-info"><a href="#">Site statistics</a><small>visits, users, orders stats</small></div>
            <a href="#"><i class="icon-stats2"></i></a><span class="bottom-info bg-primary">3 new updates</span></li>
        <li class="bg-info">
            <div class="top-info"><a href="#">My messages</a><small>messages history</small></div>
            <a href="#"><i class="icon-bubbles3"></i></a><span class="bottom-info bg-primary">24 new messages</span></li>
        <li class="bg-warning">
            <div class="top-info"><a href="#">Orders history</a><small>purchases statistics</small></div>
            <a href="#"><i class="icon-cart2"></i></a><span class="bottom-info bg-primary">17 new orders</span></li>
        <li class="bg-primary">
            <div class="top-info"><a href="#">Invoices stats</a><small>invoices archive</small></div>
            <a href="#"><i class="icon-coin"></i></a><span class="bottom-info bg-danger">9 new invoices</span></li>
    </ul>
    <!-- /default info blocks -->
    <!-- Page tabs -->
    <div class="tabbable page-tabs">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab"><i class="icon-file"></i> Activity</a></li>
            <li><a href="#contacts" data-toggle="tab"><i class="icon-accessibility"></i> My contacts <span class="label label-danger">34</span></a></li>
            <li><a href="#tasks" data-toggle="tab"><i class="icon-grid"></i> My tasks <span class="label label-primary">31</span></a></li>
            <li><a href="#invoices" data-toggle="tab"><i class="icon-cart2"></i> My invoices <span class="label label-primary">9</span></a></li>
            <li class="pull-right dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="icon-cog3"></i>Settings <b class="caret"></b> </a>
                <ul class="dropdown-menu dropdown-menu-right icons-right">
                    <li><a href="#"><i class="icon-cogs"></i> This is</a></li>
                    <li><a href="#"><i class="icon-grid3"></i> Dropdown</a></li>
                    <li><a href="#"><i class="icon-spinner7"></i> With right</a></li>
                    <li><a href="#"><i class="icon-link"></i> Aligned icons</a></li>
                </ul>
            </li>
        </ul>
        <div class="tab-content">
            <!-- First tab -->
            <div class="tab-pane active fade in" id="activity">
                <!-- Alert -->
                <div class="alert alert-warning fade in block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <i class="icon-info"></i> Nullam tincidunt dapibus nisi. Aenean porttitor egestas dolor, ut pretium enim vehicula at. Vivamus vulputate risus felis, eget blandit urna aliquam at </div>
                <!-- /alert -->
                <!-- Questions and contact -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- Questions -->
                        <h6><i class="icon-question5"></i> Newest questions</h6>
                        <div class="panel-group block">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="panel-title panel-trigger"><a data-toggle="collapse" href="#question1">1. Morbi a nulla quis enim porttitor hasellus rutrum tincidunt lacus?</a></h6>
                                </div>
                                <div id="question1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p class="alert alert-success fade in text-center">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus. </p>
                                        <hr>
                                        <p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="panel-title panel-trigger"><a data-toggle="collapse" href="#question2">2. Suspendisse rhoncus vulputate enim erat non euismod fermentum?</a></h6>
                                </div>
                                <div id="question2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p class="alert alert-success fade in text-center">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus. </p>
                                        <hr>
                                        <p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="panel-title panel-trigger"><a data-toggle="collapse" href="#question3">3. Nullam non massa nec augue pharetra venenatis facilisis viverra?</a></h6>
                                </div>
                                <div id="question3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p class="alert alert-success fade in text-center">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus. </p>
                                        <hr>
                                        <p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="panel-title panel-trigger"><a data-toggle="collapse" href="#question4">4. Aliquam at nisi eget lacus tincidunt semper?</a></h6>
                                </div>
                                <div id="question4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p class="alert alert-success fade in text-center">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus. </p>
                                        <hr>
                                        <p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="panel-title panel-trigger"><a data-toggle="collapse" href="#question5">5. Vivamus sit amet nulla ac nulla iaculis blandit vitae?</a></h6>
                                </div>
                                <div id="question5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p class="alert alert-success fade in text-center">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus. </p>
                                        <hr>
                                        <p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="panel-title panel-trigger"><a data-toggle="collapse" href="#question6">6. Nunc vitae eleifend sapien. Vestibulum et?</a></h6>
                                </div>
                                <div id="question6" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p class="alert alert-success fade in text-center">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus. </p>
                                        <hr>
                                        <p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>
                                </div>
                            </div>
                        </div>
                        <!-- Questions -->
                        <!-- Simple contact form -->
                        <form action="#" class="block validate" role="form">
                            <h6 class="heading-hr"><i class="icon-support"></i> Contact support</h6>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Your name: <span class="mandatory">*</span></label>
                                        <input type="text" name="name" placeholder="Eugene" class="form-control required">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email address: <span class="mandatory">*</span></label>
                                        <input type="text" name="email_field" placeholder="your@email.com" class="form-control required">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Attach file:</label>
                                        <input type="file" class="styled" id="attach">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Choose department:</label>
                                        <select data-placeholder="Select department" class="select-full" tabindex="2">
                                            <option value=""></option>
                                            <option value="Support">Support (online)</option>
                                            <option value="Sles">Sales department</option>
                                            <option value="Lawers">Lawers</option>
                                            <option value="Information">Information</option>
                                            <option value="Administration">Web administration</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Your message: <span class="mandatory">*</span></label>
                                <textarea rows="5" cols="5" name="message" placeholder="Your message..." class="elastic form-control required"></textarea>
                            </div>
                            <div class="text-right">
                                <input type="reset" value="Cancel" class="btn btn-danger">
                                <input type="submit" value="Send message" class="btn btn-primary">
                            </div>
                        </form>
                        <!-- /simple contact form -->
                    </div>
                    <div class="col-md-6">
                        <!-- Contacts -->
                        <div class="block">
                            <h6><i class="icon-paragraph-justify2"></i> Online contacts</h6>
                            <ul class="message-list">
                                <li class="message-list-header">Buddies</li>
                                <li>
                                    <div class="clearfix">
                                        <div class="chat-member"><a href="#"><img src="images/demo/users/face1.png" alt=""></a>
                                            <h6>Eugene Kopyov <span class="status status-success"></span> <small>&nbsp; /&nbsp; Wed developer</small></h6>
                                        </div>
                                        <div class="chat-actions"><a class="btn btn-link btn-icon btn-xs"><i class="icon-bubble3"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="clearfix">
                                        <div class="chat-member"><a href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                            <h6>Duncan McMart <span class="status status-default"></span> <small>&nbsp; /&nbsp; Wed designer</small></h6>
                                        </div>
                                        <div class="chat-actions"><a class="btn btn-link btn-icon btn-xs"><i class="icon-bubble3"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="clearfix">
                                        <div class="chat-member"><a href="#"><img src="images/demo/users/face3.png" alt=""></a>
                                            <h6>Lucy Smith <span class="status status-warning"></span> <small>&nbsp; /&nbsp; UI expert</small></h6>
                                        </div>
                                        <div class="chat-actions"><a class="btn btn-link btn-icon btn-xs"><i class="icon-bubble3"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a></div>
                                    </div>
                                </li>
                                <li class="message-list-header">Colleagues</li>
                                <li>
                                    <div class="clearfix">
                                        <div class="chat-member"><a href="#"><img src="images/demo/users/face5.png" alt=""></a>
                                            <h6>Angel Nowak <span class="status status-default"></span> <small>&nbsp; /&nbsp; Usability expert</small></h6>
                                        </div>
                                        <div class="chat-actions"><a class="btn btn-link btn-icon btn-xs"><i class="icon-bubble3"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="clearfix">
                                        <div class="chat-member"><a href="#"><img src="images/demo/users/face6.png" alt=""></a>
                                            <h6>Vin Dins <span class="status status-danger"></span> <small>&nbsp; /&nbsp; Wed developer</small></h6>
                                        </div>
                                        <div class="chat-actions"><a class="btn btn-link btn-icon btn-xs"><i class="icon-bubble3"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a></div>
                                    </div>
                                </li>
                                <li class="message-list-header">Remote team members</li>
                                <li>
                                    <div class="clearfix">
                                        <div class="chat-member"><a href="#"><img src="images/demo/users/face10.png" alt=""></a>
                                            <h6>Robert Razinsky <span class="status status-default"></span> <small>&nbsp; /&nbsp; Usability expert</small></h6>
                                        </div>
                                        <div class="chat-actions"><a class="btn btn-link btn-icon btn-xs"><i class="icon-bubble3"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="clearfix">
                                        <div class="chat-member"><a href="#"><img src="images/demo/users/face11.png" alt=""></a>
                                            <h6>Malik Smitsons <span class="status status-danger"></span> <small>&nbsp; /&nbsp; Usability expert</small></h6>
                                        </div>
                                        <div class="chat-actions"><a class="btn btn-link btn-icon btn-xs"><i class="icon-bubble3"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- contacts -->
                    </div>
                </div>
                <!-- /questions and contact -->
                <!-- Newest team members -->
                <h6><i class="icon-people"></i> New team members</h6>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="block">
                            <div class="thumbnail"><a href="images/demo/users/face1.png" class="thumb-zoom lightbox" title="Eugene A. Kopyov"><img src="images/demo/users/face1.png" alt=""></a>
                                <div class="caption text-center">
                                    <h6>Eugene A. Kopyov <small>UX designer</small></h6>
                                    <div class="icons-group"> <a href="#" title="Google Drive" class="tip"><i class="icon-google-drive"></i></a> <a href="#" title="Twitter" class="tip"><i class="icon-twitter"></i></a> <a href="#" title="Github" class="tip"><i class="icon-github3"></i></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="block">
                            <div class="thumbnail"><a href="images/demo/users/face4.png" class="thumb-zoom lightbox" title="Sophia R. McJamer"> <img src="images/demo/users/face4.png" alt=""> </a>
                                <div class="caption text-center">
                                    <h6>Sophia R. McJamer <small>Media designer</small></h6>
                                    <div class="icons-group"> <a href="#" title="Google Drive" class="tip"><i class="icon-google-drive"></i></a> <a href="#" title="Twitter" class="tip"><i class="icon-twitter"></i></a> <a href="#" title="Github" class="tip"><i class="icon-github3"></i></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="block">
                            <div class="thumbnail"><a href="images/demo/users/face8.png" class="thumb-zoom lightbox" title="Noah Kennedy"> <img src="images/demo/users/face8.png" alt=""> </a>
                                <div class="caption text-center">
                                    <h6>Noah Kennedy <small>CEO &amp; founder</small></h6>
                                    <div class="icons-group"> <a href="#" title="Google Drive" class="tip"><i class="icon-google-drive"></i></a> <a href="#" title="Twitter" class="tip"><i class="icon-twitter"></i></a> <a href="#" title="Github" class="tip"><i class="icon-github3"></i></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="block">
                            <div class="thumbnail"><a href="images/demo/users/face10.png" class="thumb-zoom lightbox" title="Will DeBrandon"> <img src="images/demo/users/face10.png" alt=""> </a>
                                <div class="caption text-center">
                                    <h6>Will DeBrandon <small>Print designer</small></h6>
                                    <div class="icons-group"> <a href="#" title="Google Drive" class="tip"><i class="icon-google-drive"></i></a> <a href="#" title="Twitter" class="tip"><i class="icon-twitter"></i></a> <a href="#" title="Github" class="tip"><i class="icon-github3"></i></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /newest team members -->
                <!-- Alert -->
                <div class="alert alert-success fade in block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <i class="icon-info"></i> Nullam tincidunt dapibus nisi. Aenean porttitor egestas dolor, ut pretium enim vehicula at. Vivamus vulputate risus felis, eget blandit urna aliquam at </div>
                <!-- /alert -->
                <!-- Recent activity -->
                <div class="block">
                    <h6 class="heading-hr"><i class="icon-file"></i> Recent activity</h6>
                    <ul class="media-list">
                        <li class="media"><a class="pull-left" href="#"><img class="media-object" src="images/demo/users/face25.png" alt=""></a>
                            <div class="media-body">
                                <div class="clearfix"><a href="#" class="media-heading">Eugene Kopyov</a><span class="media-notice">December 10, 2013 / 10:20 pm</span></div>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</div>
                        </li>
                        <li class="media"><a class="pull-left" href="#"><img class="media-object" src="images/demo/users/face24.png" alt=""></a>
                            <div class="media-body">
                                <div class="clearfix"><a href="#" class="media-heading">Martin Wolf</a><span class="media-notice">December 12, 2013 / 10:14 pm</span></div>
                                Cras tempus pretium ligula, quis viverra purus eleifend et.</div>
                        </li>
                        <li class="media"><a class="pull-left" href="#"><img class="media-object" src="images/demo/users/face23.png" alt=""></a>
                            <div class="media-body">
                                <div class="clearfix"><a href="#" class="media-heading">Duncan McMart</a><span class="media-notice">January 3, 2014 / 12:14 pm</span></div>
                                Quisque dignissim nibh nec massa egestas interdum. Proin congue vulputate velit, sodales mattis neque tempor a.</div>
                        </li>
                        <li class="media"><a class="pull-left" href="#"><img class="media-object" src="images/demo/users/face22.png" alt=""></a>
                            <div class="media-body">
                                <div class="clearfix"><a href="#" class="media-heading">Lucy Smith</a><span class="media-notice">January 22, 2014 / 10:26 pm</span></div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget orci non sem sodales dictum.</div>
                        </li>
                        <li class="media"><a class="pull-left" href="#"><img class="media-object" src="images/demo/users/face21.png" alt=""></a>
                            <div class="media-body">
                                <div class="clearfix"><a href="#" class="media-heading">Angel Nowak</a><span class="media-notice">January 24, 2014 / 10:20 am</span></div>
                                Mauris vulputate bibendum justo non pretium. Sed eleifend, est vitae pellentesque condimentum, lacus ligula consectetur dolor, a congue metus odio ut neque.</div>
                        </li>
                        <li class="media"><a class="pull-left" href="#"><img class="media-object" src="images/demo/users/face20.png" alt=""></a>
                            <div class="media-body">
                                <div class="clearfix"><a href="#" class="media-heading">Barbara Madison</a><span class="media-notice">February 2, 2014 / 10:47 pm</span></div>
                                Nullam vel massa blandit turpis sodales consectetur. Maecenas non mattis purus. Nullam vitae risus eu est.</div>
                        </li>
                        <li class="media"><a class="pull-left" href="#"><img class="media-object" src="images/demo/users/face19.png" alt=""></a>
                            <div class="media-body">
                                <div class="clearfix"><a href="#" class="media-heading">James Willings</a><span class="media-notice">February 16, 2014 / 07:28 am</span></div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc purus lacus, consequat et dui ut, ullamcorper sollicitudin lorem. Donec gravida eget nisi eget congue. Sed varius sollicitudin adipiscing.</div>
                        </li>
                    </ul>
                </div>
                <!-- /recent activity -->
            </div>
            <!-- /first tab -->
            <!-- Second tab -->
            <div class="tab-pane fade" id="contacts">
                <!-- Contacts -->
                <div class="block">
                    <div class="chat-member-heading clearfix">
                        <h6 class="pull-left"><i class="icon-bubbles3"></i> Online contacts</h6>
                        <div class="pull-right"><a href="#" class="btn btn-warning btn-icon btn-xs"><i class="icon-plus-circle"></i></a></div>
                    </div>
                    <ul class="message-list">
                        <li class="message-list-header">Buddies</li>
                        <li>
                            <div class="clearfix">
                                <div class="chat-member"><a href="#"><img src="images/demo/users/face1.png" alt=""></a>
                                    <h6>Eugene Kopyov <span class="status status-success"></span> <small>&nbsp; /&nbsp; Wed developer</small></h6>
                                </div>
                                <div class="chat-actions"><a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#eugene_kopyov"><i class="icon-bubble3"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a></div>
                            </div>
                            <div class="panel-collapse collapse" id="eugene_kopyov">
                                <div class="chat">
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face1.png" alt=""></a>
                                        <div class="message-body"><span class="typing"></span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">10 Nov, 2013</div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face1.png" alt=""></a>
                                        <div class="message-body"> Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face1.png" alt=""></a>
                                        <div class="message-body"> Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">12 Nov, 2013</div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face1.png" alt=""></a>
                                        <div class="message-body"> Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                </div>
                                <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
                                <div class="message-controls"> <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
                                    <div class="pull-right">
                                        <div class="upload-options"> <a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a> <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a> <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a> </div>
                                        <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="clearfix">
                                <div class="chat-member"><a href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                    <h6>Duncan McMart <span class="status status-default"></span> <small>&nbsp; /&nbsp; Wed designer</small></h6>
                                </div>
                                <div class="chat-actions"><a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#duncan_mcmart"><i class="icon-bubble3"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a></div>
                            </div>
                            <div class="panel-collapse collapse" id="duncan_mcmart">
                                <div class="chat">
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"><span class="typing"></span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face3.png" alt=""></a>
                                        <div class="message-body"> Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">10 Nov, 2013</div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face3.png" alt=""></a>
                                        <div class="message-body"> Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">12 Nov, 2013</div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face3.png" alt=""></a>
                                        <div class="message-body"> Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face3.png" alt=""></a>
                                        <div class="message-body"> Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                </div>
                                <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
                                <div class="message-controls"> <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
                                    <div class="pull-right">
                                        <div class="upload-options"> <a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a> <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a> <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a> </div>
                                        <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="message-list-header">Colleagues</li>
                        <li>
                            <div class="clearfix">
                                <div class="chat-member"><a href="#"><img src="images/demo/users/face5.png" alt=""></a>
                                    <h6>Angel Nowak <span class="status status-default"></span> <small>&nbsp; /&nbsp; Usability expert</small></h6>
                                </div>
                                <div class="chat-actions"><a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#angel_nowak"><i class="icon-bubble3"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a></div>
                            </div>
                            <div class="panel-collapse collapse" id="angel_nowak">
                                <div class="chat">
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face5.png" alt=""></a>
                                        <div class="message-body"><span class="typing"></span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">10 Nov, 2013</div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face5.png" alt=""></a>
                                        <div class="message-body"> Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face5.png" alt=""></a>
                                        <div class="message-body"> Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">12 Nov, 2013</div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face5.png" alt=""></a>
                                        <div class="message-body"> Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                </div>
                                <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
                                <div class="message-controls"> <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
                                    <div class="pull-right">
                                        <div class="upload-options"> <a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a> <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a> <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a> </div>
                                        <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="clearfix">
                                <div class="chat-member"><a href="#"><img src="images/demo/users/face6.png" alt=""></a>
                                    <h6>Vin Dins <span class="status status-danger"></span> <small>&nbsp; /&nbsp; Wed developer</small></h6>
                                </div>
                                <div class="chat-actions"><a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#vin_dins"><i class="icon-bubble3"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a></div>
                            </div>
                            <div class="panel-collapse collapse in" id="vin_dins">
                                <div class="chat">
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face6.png" alt=""></a>
                                        <div class="message-body"><span class="typing"></span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">10 Nov, 2013</div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face6.png" alt=""></a>
                                        <div class="message-body"> Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face6.png" alt=""></a>
                                        <div class="message-body"> Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">12 Nov, 2013</div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face6.png" alt=""></a>
                                        <div class="message-body"> Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                </div>
                                <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
                                <div class="message-controls"> <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
                                    <div class="pull-right">
                                        <div class="upload-options"> <a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a> <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a> <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a> </div>
                                        <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="clearfix">
                                <div class="chat-member"><a href="#"><img src="images/demo/users/face7.png" alt=""></a>
                                    <h6>John Doe <span class="status status-success"></span> <small>&nbsp; /&nbsp; Wed developer</small></h6>
                                </div>
                                <div class="chat-actions"><a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#john_doe"><i class="icon-bubble3"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a></div>
                            </div>
                            <div class="panel-collapse collapse" id="john_doe">
                                <div class="chat">
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face7.png" alt=""></a>
                                        <div class="message-body"><span class="typing"></span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">10 Nov, 2013</div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face7.png" alt=""></a>
                                        <div class="message-body"> Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face7.png" alt=""></a>
                                        <div class="message-body"> Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">12 Nov, 2013</div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face7.png" alt=""></a>
                                        <div class="message-body"> Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                </div>
                                <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
                                <div class="message-controls"> <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
                                    <div class="pull-right">
                                        <div class="upload-options"> <a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a> <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a> <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a> </div>
                                        <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="clearfix">
                                <div class="chat-member"><a href="#"><img src="images/demo/users/face8.png" alt=""></a>
                                    <h6>Barbara Madison <span class="status status-warning"></span> <small>&nbsp; /&nbsp; UI expert</small></h6>
                                </div>
                                <div class="chat-actions"><a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#barbara_madison"><i class="icon-bubble3"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a></div>
                            </div>
                            <div class="panel-collapse collapse" id="barbara_madison">
                                <div class="chat">
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face8.png" alt=""></a>
                                        <div class="message-body"><span class="typing"></span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">10 Nov, 2013</div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face8.png" alt=""></a>
                                        <div class="message-body"> Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face8.png" alt=""></a>
                                        <div class="message-body"> Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">12 Nov, 2013</div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face8.png" alt=""></a>
                                        <div class="message-body"> Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                </div>
                                <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
                                <div class="message-controls"> <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
                                    <div class="pull-right">
                                        <div class="upload-options"> <a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a> <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a> <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a> </div>
                                        <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="message-list-header">Remote team members</li>
                        <li>
                            <div class="clearfix">
                                <div class="chat-member"><a href="#"><img src="images/demo/users/face10.png" alt=""></a>
                                    <h6>Robert Razinsky <span class="status status-default"></span> <small>&nbsp; /&nbsp; Usability expert</small></h6>
                                </div>
                                <div class="chat-actions"><a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#robert_razinsky"><i class="icon-bubble3"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a></div>
                            </div>
                            <div class="panel-collapse collapse" id="robert_razinsky">
                                <div class="chat">
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face10.png" alt=""></a>
                                        <div class="message-body"><span class="typing"></span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">10 Nov, 2013</div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face10.png" alt=""></a>
                                        <div class="message-body"> Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face10.png" alt=""></a>
                                        <div class="message-body"> Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">12 Nov, 2013</div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face10.png" alt=""></a>
                                        <div class="message-body"> Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                </div>
                                <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
                                <div class="message-controls"> <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
                                    <div class="pull-right">
                                        <div class="upload-options"> <a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a> <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a> <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a> </div>
                                        <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="clearfix">
                                <div class="chat-member"><a href="#"><img src="images/demo/users/face11.png" alt=""></a>
                                    <h6>Malik Smitsons <span class="status status-danger"></span> <small>&nbsp; /&nbsp; Wed developer</small></h6>
                                </div>
                                <div class="chat-actions"><a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#malik_smitsons"><i class="icon-bubble3"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a></div>
                            </div>
                            <div class="panel-collapse collapse" id="malik_smitsons">
                                <div class="chat">
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face11.png" alt=""></a>
                                        <div class="message-body"><span class="typing"></span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">10 Nov, 2013</div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face11.png" alt=""></a>
                                        <div class="message-body"> Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face11.png" alt=""></a>
                                        <div class="message-body"> Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">12 Nov, 2013</div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face11.png" alt=""></a>
                                        <div class="message-body"> Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                </div>
                                <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
                                <div class="message-controls"> <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
                                    <div class="pull-right">
                                        <div class="upload-options"> <a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a> <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a> <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a> </div>
                                        <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="clearfix">
                                <div class="chat-member"><a href="#"><img src="images/demo/users/face16.png" alt=""></a>
                                    <h6>Barnaba Pall <span class="status status-warning"></span> <small>&nbsp; /&nbsp; UI expert</small></h6>
                                </div>
                                <div class="chat-actions"><a class="btn btn-link btn-icon btn-xs" data-toggle="collapse" href="#barnaba_pall"><i class="icon-bubble3"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a><a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a></div>
                            </div>
                            <div class="panel-collapse collapse" id="barnaba_pall">
                                <div class="chat">
                                    <div class="message"> <a class="message-img" href="#"><img src="images/demo/users/face16.png" alt=""></a>
                                        <div class="message-body"><span class="typing"></span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                        <div class="message-body"> Nunc volutpat commodo ullamcorper. Vivamus consequat sapien ac ante pharetra pellentesque. Sed molestie leo vitae erat sagittis, ac posuere nibh faucibus. In nec massa suscipit, sagittis ligula non, accumsan velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">10 Nov, 2013</div>
                                    <div class="message"> <a class="message-img" href="#"><?= $this->Template->img("images/demo/users/face16.png", array("class" => "")) ?></a>
                                        <div class="message-body"> Aenean dictum vitae tortor vitae placerat. Donec tristique urna tellus, porttitor commodo quam facilisis sit amet. Pellentesque ullamcorper metus sed libero imperdiet, id consequat libero malesuada. Aenean mattis, nisl nec sodales adipiscing, nunc mauris volutpat nulla, quis dictum sapien nibh vitae metus. Fusce vehicula aliquam enim, sed viverra ipsum elementum at <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><?= $this->Template->img("images/demo/users/face2.png", array("class" => "")) ?></a>
                                        <div class="message-body"> Nulla venenatis enim et mi egestas blandit. Praesent in consequat eros, et sagittis metus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><?= $this->Template->img("images/demo/users/face16.png", array("class" => "")) ?></a>
                                        <div class="message-body"> Mauris at tellus viverra, lobortis elit non, luctus dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in ornare ligula. Sed in pellentesque justo, vitae tristique urna. Vestibulum congue ligula ac posuere pharetra <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="moment">12 Nov, 2013</div>
                                    <div class="message reversed"> <a class="message-img" href="#"><?= $this->Template->img("images/demo/users/face2.png", array("class" => "")) ?></a>
                                        <div class="message-body"> Pellentesque ut sollicitudin quam, et suscipit lectus. Duis accumsan, purus ac feugiat condimentum, sem risus eleifend mi, vitae sagittis nisi sem nec libero. Nunc mauris tellus, cursus vel faucibus non, accumsan quis risus <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message"> <a class="message-img" href="#"><?= $this->Template->img("images/demo/users/face16.png", array("class" => "")) ?></a>
                                        <div class="message-body"> Morbi lacus nulla, tristique eu hendrerit non, auctor ut arcu. Morbi id ligula mi. Vivamus ultricies lobortis erat sed placerat. Etiam molestie urna pulvinar porta fringilla. Aenean vitae lacinia felis, id laoreet diam <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                    <div class="message reversed"> <a class="message-img" href="#"><?= $this->Template->img("images/demo/users/face2.png", array("class" => "")) ?></a>
                                        <div class="message-body"> Nunc laoreet aliquam enim adipiscing placerat. Donec ac ultricies nisi. Nunc vel varius ante, et luctus elit. In eros urna, dignissim vitae quam eu, facilisis lacinia leo <span class="attribution">14:23pm, 4th Dec 2010</span> </div>
                                    </div>
                                </div>
                                <textarea name="enter-message" class="form-control" rows="3" cols="1" placeholder="Enter your message..."></textarea>
                                <div class="message-controls"> <span class="pull-left"><i class="icon-checkmark-circle"></i> Some basic <a href="#" title="">HTML</a> is OK</span>
                                    <div class="pull-right">
                                        <div class="upload-options"> <a href="#" title="" class="tip" data-original-title="Smileys"><i class="icon-smiley"></i></a> <a href="#" title="" class="tip" data-original-title="Upload photo"><i class="icon-camera3"></i></a> <a href="#" title="" class="tip" data-original-title="Attach file"><i class="icon-attachment"></i></a> </div>
                                        <button type="button" class="btn btn-danger btn-loading" data-loading-text="<i class='icon-spinner7 spin'></i> Processing">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- contacts -->
            </div>
            <!-- /second tab -->
            <!-- Third tab -->
            <div class="tab-pane fade" id="tasks">
                <!-- Tasks table -->
                <div class="block">
                    <h6 class="heading-hr"><i class="icon-paragraph-justify2"></i> My tasks</h6>
                    <div class="datatable-tasks">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Task Description</th>
                                    <th class="task-priority">Priority</th>
                                    <th class="task-date-added">Date Added</th>
                                    <th class="task-progress">Progress</th>
                                    <th class="task-deadline">Deadline</th>
                                    <th class="task-tools text-center">Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Donec suscipit ultrices commodo. Suspendisse potenti</a> <span>General layout additions</span></td>
                                    <td class="text-center"><span class="label label-danger">High</span></td>
                                    <td>September 20, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"><span class="sr-only">90% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">14</strong> hours left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Donec sagittis sit amet felis non semper</a> <span>Design &amp; UI concepts</span></td>
                                    <td class="text-center"><span class="label label-danger">High</span></td>
                                    <td>September 18, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">2</strong> days left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Pellentesque sed nibh non neque auctor ornare ac in est</a> <span>HTML / CSS changes</span></td>
                                    <td class="text-center"><span class="label label-info">Low</span></td>
                                    <td>September 2, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;"><span class="sr-only">12% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">18</strong> days left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Pellentesque habitant morbi tristique senectus et netus</a> <span>HTML / CSS changes</span></td>
                                    <td class="text-center"><span class="label label-success">Normal</span></td>
                                    <td>August 21, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">7</strong> days left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Et malesuada fames ac turpis egestas</a> <span>HTML / CSS changes</span></td>
                                    <td class="text-center"><span class="label label-danger">High</span></td>
                                    <td>August 12, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="sr-only">80% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">90</strong> days left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Maecenas eros nisl, tempor vitae dolor eu</a> <span>General layout additions</span></td>
                                    <td class="text-center"><span class="label label-success">Normal</span></td>
                                    <td>August 7, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100" style="width: 41%;"><span class="sr-only">41% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">62</strong> days left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Nunc gravida, nunc vel condimentum mattis</a> <span>General layout additions</span></td>
                                    <td class="text-center"><span class="label label-danger">High</span></td>
                                    <td>July 30, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">21</strong> hour left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Rhoncus rutrum metus neque rutrum tortor</a> <span>General layout additions</span></td>
                                    <td class="text-center"><span class="label label-danger">High</span></td>
                                    <td>July 26, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">62</strong> days left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Fusce sapien velit, accumsan eget risus et</a> <span>General layout additions</span></td>
                                    <td class="text-center"><span class="label label-info">Low</span></td>
                                    <td>July 22, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">51</strong> day left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Suspendisse dictum vitae ante ut tempor</a> <span>HTML / CSS changes</span></td>
                                    <td class="text-center"><span class="label label-info">Low</span></td>
                                    <td>July 10, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="width: 6%;"><span class="sr-only">6% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">2</strong> days left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Maecenas porta augue et odio dignissim</a> <span>HTML / CSS changes</span></td>
                                    <td class="text-center"><span class="label label-info">Low</span></td>
                                    <td>June 25, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"><span class="sr-only">65% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">3</strong> days left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Morbi varius odio at quam vehicula mattis</a> <span>Design &amp; UI concepts</span></td>
                                    <td class="text-center"><span class="label label-success">Normal</span></td>
                                    <td>June 21, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="sr-only">20% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">89</strong> days left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Quisque ultrices libero in nisl fringilla</a> <span>Design &amp; UI concepts</span></td>
                                    <td class="text-center"><span class="label label-danger">High</span></td>
                                    <td>June 17, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">32</strong> days left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Nam fermentum ut nunc eget tristique</a> <span>HTML / CSS changes</span></td>
                                    <td class="text-center"><span class="label label-danger">High</span></td>
                                    <td>June 14, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"><span class="sr-only">31% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">2</strong> days left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Etiam viverra porttitor auctor</a> <span>Design &amp; UI concepts</span></td>
                                    <td class="text-center"><span class="label label-success">Normal</span></td>
                                    <td>June 3, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"><span class="sr-only">90% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">1</strong> day left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Curabitur quis commodo massa. Proin eget arcu eros</a> <span>Design &amp; UI concepts</span></td>
                                    <td class="text-center"><span class="label label-danger">High</span></td>
                                    <td>May 9, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"><span class="sr-only">10% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">2</strong> days left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Maecenas sed sapien vel nisi porta sollicitudin</a> <span>Design &amp; UI concepts</span></td>
                                    <td class="text-center"><span class="label label-danger">High</span></td>
                                    <td>May 2, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">37</strong> days left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Nunc placerat mattis consectetur. Cras sagittis scelerisque imperdiet</a> <span>HTML / CSS changes</span></td>
                                    <td class="text-center"><span class="label label-info">Low</span></td>
                                    <td>April 21, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"><span class="sr-only">10% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong class="text-danger">3</strong> days left</td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Nunc tincidunt consectetur quam et venenatis</a> <span>HTML / CSS changes</span></td>
                                    <td class="text-center"><span class="label label-info">Low</span></td>
                                    <td>April 19, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong>Complete!</strong></td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Phasellus quis sagittis orci, vitae placerat mauris</a> <span>Design &amp; UI concepts</span></td>
                                    <td class="text-center"><span class="label label-info">Low</span></td>
                                    <td>April 11, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong>Complete!</strong></td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Nunc sit amet arcu euismod nulla luctus pulvinar in at enim</a> <span>Design &amp; UI concepts</span></td>
                                    <td class="text-center"><span class="label label-danger">High</span></td>
                                    <td>April 1, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong>Complete!</strong></td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Duis convallis ornare risus, sit amet tincidunt elit euismod vel</a> <span>HTML / CSS changes</span></td>
                                    <td class="text-center"><span class="label label-danger">High</span></td>
                                    <td>March 8, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong>Complete!</strong></td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="task-desc"><a href="task_detailed.html">Cras eu mauris adipiscing massa porttitor </a> <span>Design &amp; UI concepts</span></td>
                                    <td class="text-center"><span class="label label-danger">High</span></td>
                                    <td>March 2, 2013</td>
                                    <td><div class="progress progress-micro">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100% Complete</span></div>
                                        </div></td>
                                    <td><i class="icon-clock"></i> <strong>Complete!</strong></td>
                                    <td class="text-center"><div class="btn-group">
                                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
                                            <ul class="dropdown-menu icons-right dropdown-menu-right">
                                                <li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
                                                <li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
                                                <li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
                                                <li><a href="#"><i class="icon-stack"></i> Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /tasks table -->
            </div>
            <!-- /third tab -->
            <!-- Fourth tab -->
            <div class="tab-pane fade" id="invoices">
                <!-- Invoice list -->
                <div class="block">
                    <h6 class="heading-hr"><i class="icon-cart2"></i> New invoices</h6>
                    <div class="datatable-invoices">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="invoice-number">Invoice #</th>
                                    <th>Description</th>
                                    <th class="invoice-amount">Amount</th>
                                    <th>Status</th>
                                    <th class="invoice-date">Issue date</th>
                                    <th class="invoice-date">Due date</th>
                                    <th class="invoice-expand text-center">View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="invoice.html"><strong>#00124</strong></a></td>
                                    <td>Integer viverra massa sit amet malesuada varius. Aliquam ut eros non lorem sagittis mattis sed vel lectus. Donec condimentum magna mauris</td>
                                    <td><h4>$30.267</h4></td>
                                    <td><span class="label label-success">Paid on 12 Jan, 2014</span></td>
                                    <td><span class="text-semibold">December 12, 2013</span></td>
                                    <td><span class="text-semibold">January 15, 2014</span></td>
                                    <td class="text-center"><a data-toggle="modal" role="button" href="#default-modal" class="btn btn-default btn-xs btn-icon"><i class="icon-file6"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a href="invoice.html"><strong>#00123</strong></a></td>
                                    <td>Fusce orci mi, tincidunt at nibh nec, ornare feugiat dolor. Mauris sollicitudin, velit eu laoreet iaculis</td>
                                    <td><h4>$12.236</h4></td>
                                    <td><span class="label label-success">Paid on 5 Dec, 2013</span></td>
                                    <td><span class="text-semibold">November 6, 2013</span></td>
                                    <td><span class="text-semibold">December 7, 2013</span></td>
                                    <td class="text-center"><a data-toggle="modal" role="button" href="#default-modal" class="btn btn-default btn-xs btn-icon"><i class="icon-file6"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a href="invoice.html"><strong>#00122</strong></a></td>
                                    <td>Nulla dapibus dapibus leo et vulputate. Morbi auctor et lectus sed dignissim. Vestibulum et venenatis ante</td>
                                    <td><h4>$19.940</h4></td>
                                    <td><span class="label label-danger">Unpaid</span></td>
                                    <td><span class="text-semibold">October 12, 2013</span></td>
                                    <td><span class="text-semibold">November 15, 2013</span></td>
                                    <td class="text-center"><a data-toggle="modal" role="button" href="#default-modal" class="btn btn-default btn-xs btn-icon"><i class="icon-file6"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a href="invoice.html"><strong>#00121</strong></a></td>
                                    <td>Mauris iaculis eros id urna fermentum lacinia non vel velit. Mauris pellentesque dui id metus</td>
                                    <td><h4>$21.290</h4></td>
                                    <td><span class="label label-info">Pending</span></td>
                                    <td><span class="text-semibold">September 7, 2013</span></td>
                                    <td><span class="text-semibold">October 8, 2013</span></td>
                                    <td class="text-center"><a data-toggle="modal" role="button" href="#default-modal" class="btn btn-default btn-xs btn-icon"><i class="icon-file6"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a href="invoice.html"><strong>#00120</strong></a></td>
                                    <td>Etiam lacinia, nunc in placerat volutpat, elit eros sagittis nulla, at lobortis est nulla ac purus</td>
                                    <td><h4>$8.800</h4></td>
                                    <td><span class="label label-info">Pending</span></td>
                                    <td><span class="text-semibold">August 24, 2013</span></td>
                                    <td><span class="text-semibold">September 25, 2013</span></td>
                                    <td class="text-center"><a data-toggle="modal" role="button" href="#default-modal" class="btn btn-default btn-xs btn-icon"><i class="icon-file6"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a href="invoice.html"><strong>#00119</strong></a></td>
                                    <td>Aenean pulvinar sem ultricies libero bibendum rhoncus. Proin non imperdiet urna, sit amet cursus est lorem ipsum dolor sir amet</td>
                                    <td><h4>$14.209</h4></td>
                                    <td><span class="label label-info">Pending</span></td>
                                    <td><span class="text-semibold">July 12, 2013</span></td>
                                    <td><span class="text-semibold">August 15, 2013</span></td>
                                    <td class="text-center"><a data-toggle="modal" role="button" href="#default-modal" class="btn btn-default btn-xs btn-icon"><i class="icon-file6"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a href="invoice.html"><strong>#00118</strong></a></td>
                                    <td>INunc sagittis tincidunt urna ac blandit. Maecenas rhoncus blandit convallis. Sed metus ligula, hendrerit sed porta condimentum, lacinia a neque</td>
                                    <td><h4>$6.390</h4></td>
                                    <td><span class="label label-danger">Unpaid</span></td>
                                    <td><span class="text-semibold">June 12, 2013</span></td>
                                    <td><span class="text-semibold">July 15, 2013</span></td>
                                    <td class="text-center"><a data-toggle="modal" role="button" href="#default-modal" class="btn btn-default btn-xs btn-icon"><i class="icon-file6"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a href="invoice.html"><strong>#00117</strong></a></td>
                                    <td>Nullam aliquam velit non bibendum dapibus. Vivamus malesuada pharetra quam, convallis lacinia sapien suscipit quis</td>
                                    <td><h4>$29.900</h4></td>
                                    <td><span class="label label-success">Paid on 12 Aug, 2013</span></td>
                                    <td><span class="text-semibold">May 2, 2013</span></td>
                                    <td><span class="text-semibold">June 8, 2013</span></td>
                                    <td class="text-center"><a data-toggle="modal" role="button" href="#default-modal" class="btn btn-default btn-xs btn-icon"><i class="icon-file6"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a href="invoice.html"><strong>#00116</strong></a></td>
                                    <td>Aenean a sapien elit. Morbi ac sapien id purus imperdiet elementum. Pellentesque suscipit pretium erat, et condimentum neque aliquam et</td>
                                    <td><h4>$20.260</h4></td>
                                    <td><span class="label label-success">Paid on 5 May, 2013</span></td>
                                    <td><span class="text-semibold">April 20, 2013</span></td>
                                    <td><span class="text-semibold">May 10, 2013</span></td>
                                    <td class="text-center"><a data-toggle="modal" role="button" href="#default-modal" class="btn btn-default btn-xs btn-icon"><i class="icon-file6"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a href="invoice.html"><strong>#00115</strong></a></td>
                                    <td>Aliquam semper rhoncus odio, et commodo mauris semper et. Curabitur in quam non sem malesuada consequat</td>
                                    <td><h4>$31.190</h4></td>
                                    <td><span class="label label-danger">Unpaid</span></td>
                                    <td><span class="text-semibold">March 12, 2013</span></td>
                                    <td><span class="text-semibold">April 15, 2013</span></td>
                                    <td class="text-center"><a data-toggle="modal" role="button" href="#default-modal" class="btn btn-default btn-xs btn-icon"><i class="icon-file6"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a href="invoice.html"><strong>#00114</strong></a></td>
                                    <td>Nunc varius, nunc ut tempor euismod, nisi quam tincidunt sem, at elementum nunc mauris et velit. Pellentesque consectetur odio quis enim dapibus, quis laoreet</td>
                                    <td><h4>$70.000</h4></td>
                                    <td><span class="label label-info">Pending</span></td>
                                    <td><span class="text-semibold">February 12, 2013</span></td>
                                    <td><span class="text-semibold">March 15, 2013</span></td>
                                    <td class="text-center"><a data-toggle="modal" role="button" href="#default-modal" class="btn btn-default btn-xs btn-icon"><i class="icon-file6"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a href="invoice.html"><strong>#00113</strong></a></td>
                                    <td>Donec tempus nisl eget magna feugiat pretium. Phasellus tincidunt turpis vel luctus imperdiet. Curabitur eleifend mollis lectus sed vestibulum</td>
                                    <td><h4>$21.290</h4></td>
                                    <td><span class="label label-success">Paid on 3 Feb 2013</span></td>
                                    <td><span class="text-semibold">January 12, 2013</span></td>
                                    <td><span class="text-semibold">February 15, 2013</span></td>
                                    <td class="text-center"><a data-toggle="modal" role="button" href="#default-modal" class="btn btn-default btn-xs btn-icon"><i class="icon-file6"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a href="invoice.html"><strong>#00112</strong></a></td>
                                    <td>Nam dolor sem, rhoncus non sagittis nec, gravida vel velit. Cras condimentum non justo vitae dapibus</td>
                                    <td><h4>$12.290</h4></td>
                                    <td><span class="label label-info">Pending</span></td>
                                    <td><span class="text-semibold">December 12, 2012</span></td>
                                    <td><span class="text-semibold">January 15, 2013</span></td>
                                    <td class="text-center"><a data-toggle="modal" role="button" href="#default-modal" class="btn btn-default btn-xs btn-icon"><i class="icon-file6"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /invoice list -->
                <!-- Default modal -->
                <div id="default-modal" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Modal title</h4>
                            </div>
                            <!-- New invoice template -->
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="row invoice-header">
                                        <div class="col-sm-6">
                                            <h3>The Romulan Empire</h3>
                                            <span>Building a Better Tomorrow Through Your Destruction</span></div>
                                        <div class="col-sm-6">
                                            <ul class="invoice-details">
                                                <li>Invoice # <strong class="text-danger">4759</strong></li>
                                                <li>Date of Invoice: <strong>01-24-2012</strong></li>
                                                <li>Due Date: <strong>02-10-2012</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6>Invoice To:</h6>
                                            <ul>
                                                <li><a href="#">Hiram Roth</a></li>
                                                <li>United Federation of Planets</li>
                                                <li><a href="#">president.roth@ufop.uni</a></li>
                                                <li>2269 Elba Lane</li>
                                                <li>Paris</li>
                                                <li>France</li>
                                                <li>888-555-2311</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <h6>Invoice From:</h6>
                                            <ul>
                                                <li><a href="#">Admiral Valdore</a></li>
                                                <li>Romulan Empire</li>
                                                <li><a href="#">admiral.valdore@theempire.uni</a></li>
                                                <li>5151 Pardek Memorial Way</li>
                                                <li>Krocton Segment</li>
                                                <li>Romulus</li>
                                                <li>000-555-9988</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6>Invoice Details:</h6>
                                            <ul>
                                                <li>Total hours spent: <strong class="pull-right">379</strong></li>
                                                <li>Responsible: <a href="#" class="pull-right">Eugene Kopyov</a></li>
                                                <li>Issued by: <a href="#" class="pull-right">Jennifer Notes</a></li>
                                                <li>Payment method: <strong class="pull-right">Wire transfer</strong></li>
                                                <li class="invoice-status"><strong>Current status: <span class="label label-danger pull-right">Unpaid</span></strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Descrition</th>
                                                <th>Discount</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Concept</td>
                                                <td>Creating project concept and logic</td>
                                                <td>0</td>
                                                <td><strong>$1,100</strong></td>
                                            </tr>
                                            <tr>
                                                <td>General design</td>
                                                <td>Design prototype</td>
                                                <td>0</td>
                                                <td><strong>$2,000</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Front end development</td>
                                                <td>Coding and connecting front end</td>
                                                <td>0</td>
                                                <td><strong>$1,600</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Database</td>
                                                <td>Creating and connecting database</td>
                                                <td>0</td>
                                                <td><strong>$890</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel-body">
                                    <div class="row invoice-payment">
                                        <div class="col-sm-8">
                                            <h6>Payment method:</h6>
                                            <label class="radio">
                                                <input type="radio" name="payment-unpaid" class="styled">
                                                Checkout with Google</label>
                                            <label class="radio">
                                                <input type="radio" name="payment-unpaid" class="styled">
                                                Checkout with Amazon</label>
                                            <label class="radio">
                                                <input type="radio" name="payment-unpaid" class="styled" checked="checked">
                                                Wire transfer</label>
                                            <label class="radio">
                                                <input type="radio" name="payment-unpaid" class="styled">
                                                Checkout with Paypal</label>
                                            <label class="radio">
                                                <input type="radio" name="payment-unpaid" class="styled">
                                                Checkout with Skrill</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <h6>Total:</h6>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>Subtotal:</th>
                                                        <td class="text-right">$103,850</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tax:</th>
                                                        <td class="text-right">$5,192</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total:</th>
                                                        <td class="text-right text-danger"><h6>$109,042</h6></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="btn-group pull-right">
                                                <button type="button" class="btn btn-success"><i class="icon-checkbox-partial"></i> Confirm payment</button>
                                                <button type="button" class="btn btn-primary"><i class="icon-print2"></i> Print</button>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Notes &amp; Information:</h6>
                                    This invoice contains a incomplete list of items destroyed by the Federation ship Enterprise on Startdate 5401.6 in an unprovked attacked on a peaceful &amp; wholly scientific mission to Outpost 775.The Romulan people demand immediate compensation for the loss of their Warbird, Shuttle, Cloaking Device, and to a lesser extent thier troops.</div>
                            </div>
                            <!-- /new invoice template -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /default modal -->
            </div>
            <!-- /fourth tab -->
        </div>
    </div>
    <!-- /page tabs -->
    <!-- Footer -->
    <div class="footer clearfix">
        <div class="pull-left">&copy; 2013. Londinium Admin Template by <a href="http://themeforest.net/user/Kopyov">Eugene Kopyov</a></div>
        <div class="pull-right icons-group"> <a href="#"><i class="icon-screen2"></i></a> <a href="#"><i class="icon-balance"></i></a> <a href="#"><i class="icon-cog3"></i></a> </div>
    </div>
    <!-- /footer -->
</div>