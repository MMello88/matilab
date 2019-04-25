      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <?php include_once("allHeader.php"); ?>
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                      <a href="<?= base_url("accounts/view/overview") ?>"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Overview</a>
                    </li>
                  </ol>
                </nav>
                <h1 class="page-title mr-sm-auto"> Teams <small class="badge">23 Totals</small>
                </h1>
                <!-- .btn -->
                <button class="btn btn-light btn-icon text-muted" data-toggle="modal" data-target="#modalNewTask" title="Add task"><i class="fa fa-plus-circle"></i></button> <!-- /.btn -->
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .masonry-layout -->
                <div class="masonry-layout">
                  <!-- .masonry-item -->
                  <div class="masonry-item col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <!-- team avatar -->
                        <div class="media align-items-center mb-3">
                          <a href="page-team.html" class="user-avatar user-avatar-lg mr-3"><img src="<?= base_url_assets("assets/images/avatars/team4.jpg") ?>" alt=""></a>
                          <div class="media-body">
                            <h3 class="card-title">
                              <a href="page-team.html">Creative Division</a>
                            </h3>
                            <h6 class="card-subtitle text-muted"> Event Planner </h6>
                          </div><a href="page-conversations.html" class="btn btn-icon btn-light" data-toggle="tooltip" title="Chat with teams"><i class="oi oi-chat"></i></a>
                        </div><!-- /.media -->
                        <p> We make stunning and cool responsive web and app design which suitable for any project purpose for your business. </p><!-- /team avatar -->
                        <hr>
                        <!-- team rating -->
                        <p class="rating rating-sm">
                          <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="far fa-star text-yellow"></i>
                        </p><!-- /team rating -->
                        <!-- team details -->
                        <ul class="list-icons mb-3">
                          <li>
                            <span class="list-icon"><span class="fa fa-map-marker text-muted"></span></span> London </li>
                          <li>
                            <span class="list-icon"><span class="fa fa-flag text-muted"></span></span> Since Oct 10, 2013 </li>
                        </ul><!-- /team details -->
                        <!-- team members -->
                        <div class="avatar-group">
                          <a href="#" class="user-avatar" data-toggle="tooltip" title="Andrew Kim"><img src="<?= base_url_assets("assets/images/avatars/uifaces6.jpg") ?>" alt=""></a> <a href="#" class="user-avatar" data-toggle="tooltip" title="Bryan Morgan"><img src="<?= base_url_assets("assets/images/avatars/uifaces7.jpg") ?>" alt=""></a> <a href="#" class="user-avatar" data-toggle="tooltip" title="Larry Robinson"><img src="<?= base_url_assets("assets/images/avatars/uifaces8.jpg") ?>" alt=""></a> <a href="#" class="user-avatar" data-toggle="tooltip" title="Beverly Simpson"><img src="<?= base_url_assets("assets/images/avatars/uifaces9.jpg") ?>" alt=""></a> <a href="#" class="user-avatar" data-toggle="tooltip" title="Robinson"><img src="<?= base_url_assets("assets/images/avatars/uifaces10.jpg") ?>" alt=""></a> <a href="#" class="tile tile-circle" data-toggle="modal" data-target="#membersModal">+23</a>
                        </div><!-- /team members -->
                      </div><!-- /.card-body -->
                      <!-- .card-footer -->
                      <div class="card-footer">
                        <a href="#" class="card-footer-item card-footer-item-bordered text-muted"><strong>135</strong> <span class="d-block">Projects</span></a> <a href="#" class="card-footer-item card-footer-item-bordered text-muted"><strong>6</strong> <span class="d-block">On Going</span></a> <a href="#" class="card-footer-item card-footer-item-bordered text-muted"><strong>35</strong> <span class="d-block">Tasks</span></a>
                      </div><!-- /.card-footer -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
                  <!-- .masonry-item -->
                  <div class="masonry-item col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <!-- team avatar -->
                        <div class="media align-items-center mb-3">
                          <a href="page-team.html" class="user-avatar user-avatar-lg mr-3"><img src="<?= base_url_assets("assets/images/avatars/bootstrap.svg") ?>" alt=""></a>
                          <div class="media-body">
                            <h3 class="card-title">
                              <a href="page-team.html">Bootstrap</a>
                            </h3>
                            <h6 class="card-subtitle text-muted"> Design Team </h6>
                          </div><a href="page-conversations.html" class="btn btn-icon btn-light" data-toggle="tooltip" title="Chat with teams"><i class="oi oi-chat"></i></a>
                        </div><!-- /.media -->
                        <p> We make stunning and cool responsive web and app design which suitable for any project purpose for your business. </p><!-- /team avatar -->
                        <hr>
                        <!-- team rating -->
                        <p class="rating rating-sm">
                          <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="far fa-star text-yellow"></i>
                        </p><!-- /team rating -->
                        <!-- team details -->
                        <ul class="list-icons mb-3">
                          <li>
                            <span class="list-icon"><span class="fa fa-map-marker text-muted"></span></span> London </li>
                          <li>
                            <span class="list-icon"><span class="fa fa-flag text-muted"></span></span> Since Oct 10, 2013 </li>
                        </ul><!-- /team details -->
                        <!-- team members -->
                        <div class="avatar-group">
                          <a href="#" class="user-avatar" data-toggle="tooltip" title="Andrew Kim"><img src="<?= base_url_assets("assets/images/avatars/uifaces6.jpg") ?>" alt=""></a> <a href="#" class="user-avatar" data-toggle="tooltip" title="Bryan Morgan"><img src="<?= base_url_assets("assets/images/avatars/uifaces7.jpg") ?>" alt=""></a> <a href="#" class="user-avatar" data-toggle="tooltip" title="Larry Robinson"><img src="<?= base_url_assets("assets/images/avatars/uifaces8.jpg") ?>" alt=""></a> <a href="#" class="user-avatar" data-toggle="tooltip" title="Beverly Simpson"><img src="<?= base_url_assets("assets/images/avatars/uifaces9.jpg") ?>" alt=""></a> <a href="#" class="user-avatar" data-toggle="tooltip" title="Robinson"><img src="<?= base_url_assets("assets/images/avatars/uifaces10.jpg") ?>" alt=""></a> <a href="#" class="tile tile-circle" data-toggle="modal" data-target="#membersModal">+23</a>
                        </div><!-- /team members -->
                      </div><!-- /.card-body -->
                      <!-- .card-footer -->
                      <div class="card-footer">
                        <a href="#" class="card-footer-item card-footer-item-bordered text-muted"><strong>135</strong> <span class="d-block">Projects</span></a> <a href="#" class="card-footer-item card-footer-item-bordered text-muted"><strong>6</strong> <span class="d-block">On Going</span></a> <a href="#" class="card-footer-item card-footer-item-bordered text-muted"><strong>35</strong> <span class="d-block">Tasks</span></a>
                      </div><!-- /.card-footer -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
                  <!-- .masonry-item -->
                  <div class="masonry-item col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <!-- team avatar -->
                        <div class="media align-items-center mb-3">
                          <a href="page-team.html" class="user-avatar user-avatar-lg mr-3"><img src="<?= base_url_assets("assets/images/avatars/sketch.svg") ?>" alt=""></a>
                          <div class="media-body">
                            <h3 class="card-title">
                              <a href="page-team.html">Sketch</a>
                            </h3>
                            <h6 class="card-subtitle text-muted"> Creative Agency </h6>
                          </div><a href="page-conversations.html" class="btn btn-icon btn-light" data-toggle="tooltip" title="Chat with teams"><i class="oi oi-chat"></i></a>
                        </div><!-- /.media -->
                        <p> We make stunning and cool responsive web and app design which suitable for any project purpose for your business. </p><!-- /team avatar -->
                        <hr>
                        <!-- team rating -->
                        <p class="rating rating-sm">
                          <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="far fa-star text-yellow"></i>
                        </p><!-- /team rating -->
                        <!-- team details -->
                        <ul class="list-icons mb-3">
                          <li>
                            <span class="list-icon"><span class="fa fa-map-marker text-muted"></span></span> London </li>
                          <li>
                            <span class="list-icon"><span class="fa fa-flag text-muted"></span></span> Since Oct 10, 2013 </li>
                        </ul><!-- /team details -->
                        <!-- team members -->
                        <div class="avatar-group">
                          <a href="#" class="user-avatar" data-toggle="tooltip" title="Andrew Kim"><img src="<?= base_url_assets("assets/images/avatars/uifaces6.jpg") ?>" alt=""></a> <a href="#" class="user-avatar" data-toggle="tooltip" title="Bryan Morgan"><img src="<?= base_url_assets("assets/images/avatars/uifaces7.jpg") ?>" alt=""></a> <a href="#" class="user-avatar" data-toggle="tooltip" title="Larry Robinson"><img src="<?= base_url_assets("assets/images/avatars/uifaces8.jpg") ?>" alt=""></a> <a href="#" class="user-avatar" data-toggle="tooltip" title="Beverly Simpson"><img src="<?= base_url_assets("assets/images/avatars/uifaces9.jpg") ?>" alt=""></a> <a href="#" class="user-avatar" data-toggle="tooltip" title="Robinson"><img src="<?= base_url_assets("assets/images/avatars/uifaces10.jpg") ?>" alt=""></a> <a href="#" class="tile tile-circle" data-toggle="modal" data-target="#membersModal">+23</a>
                        </div><!-- /team members -->
                      </div><!-- /.card-body -->
                      <!-- .card-footer -->
                      <div class="card-footer">
                        <a href="#" class="card-footer-item card-footer-item-bordered text-muted"><strong>135</strong> <span class="d-block">Projects</span></a> <a href="#" class="card-footer-item card-footer-item-bordered text-muted"><strong>6</strong> <span class="d-block">On Going</span></a> <a href="#" class="card-footer-item card-footer-item-bordered text-muted"><strong>35</strong> <span class="d-block">Tasks</span></a>
                      </div><!-- /.card-footer -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
                  <!-- .masonry-item -->
                  <div class="masonry-item col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <!-- team avatar -->
                        <div class="media align-items-center mb-3">
                          <a href="page-team.html" class="tile tile-circle tile-lg bg-teal mr-3">GD</a>
                          <div class="media-body">
                            <h3 class="card-title text-truncate">
                              <a href="page-team.html">Good Deck</a>
                            </h3>
                            <h6 class="card-subtitle text-muted"> Software Developer </h6>
                          </div><a href="page-conversations.html" class="btn btn-icon btn-light" data-toggle="tooltip" title="Chat with teams"><i class="oi oi-chat"></i></a>
                        </div><!-- /.media -->
                        <p> We make stunning and cool responsive web and app design which suitable for any project purpose for your business. </p><!-- /team avatar -->
                        <hr>
                        <!-- team rating -->
                        <p class="rating rating-sm">
                          <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i>
                        </p><!-- /team rating -->
                        <!-- team details -->
                        <ul class="list-icons mb-3">
                          <li>
                            <span class="list-icon"><span class="fa fa-map-marker text-muted"></span></span> Jakarta </li>
                          <li>
                            <span class="list-icon"><span class="fa fa-flag text-muted"></span></span> Since May 21, 2016 </li>
                        </ul><!-- /team details -->
                        <!-- team members -->
                        <div class="avatar-group">
                          <a href="#" class="user-avatar" data-toggle="tooltip" title="Andrew Kim"><img src="<?= base_url_assets("assets/images/avatars/uifaces16.jpg") ?>" alt=""></a> <a href="#" class="user-avatar" data-toggle="tooltip" title="Bryan Morgan"><img src="<?= base_url_assets("assets/images/avatars/uifaces17.jpg") ?>" alt=""></a> <a href="#" class="user-avatar" data-toggle="tooltip" title="Larry Robinson"><img src="<?= base_url_assets("assets/images/avatars/uifaces18.jpg") ?>" alt=""></a> <a href="#" class="user-avatar" data-toggle="tooltip" title="Beverly Simpson"><img src="<?= base_url_assets("assets/images/avatars/uifaces19.jpg") ?>" alt=""></a> <a href="#" class="user-avatar" data-toggle="tooltip" title="Robinson"><img src="<?= base_url_assets("assets/images/avatars/uifaces20.jpg") ?>" alt=""></a> <a href="#" class="tile tile-circle" data-toggle="modal" data-target="#membersModal">+16</a>
                        </div><!-- /team members -->
                      </div><!-- /.card-body -->
                      <!-- .card-footer -->
                      <div class="card-footer">
                        <a href="#" class="card-footer-item card-footer-item-bordered text-muted"><strong>63</strong> <span class="d-block">Projects</span></a> <a href="#" class="card-footer-item card-footer-item-bordered text-muted"><strong>11</strong> <span class="d-block">On Going</span></a> <a href="#" class="card-footer-item card-footer-item-bordered text-muted"><strong>65</strong> <span class="d-block">Tasks</span></a>
                      </div><!-- /.card-footer -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
                </div><!-- /.masonry-layout -->
                <!-- Modal Members List -->
                <!-- .modal -->
                <div class="modal fade" id="membersModal" tabindex="-1" role="dialog" aria-hidden="true">
                  <!-- .modal-dialog -->
                  <div class="modal-dialog modal-dialog-overflow" role="document">
                    <!-- .modal-content -->
                    <div class="modal-content">
                      <!-- .modal-header -->
                      <div class="modal-header">
                        <!-- .input-group -->
                        <div class="input-group has-clearable">
                          <button type="button" class="close" aria-label="Close"><i class="fa fa-times-circle"></i></button>
                          <div class="input-group-prepend">
                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                          </div><input type="text" class="form-control" placeholder="Search Members">
                        </div><!-- /.input-group -->
                      </div><!-- /.modal-header -->
                      <!-- .modal-body -->
                      <div class="modal-body px-0">
                        <!-- .list-group -->
                        <div class="list-group list-group-flush">
                          <!-- .list-group-item -->
                          <div class="list-group-item">
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                              <a href="#" class="user-avatar"><img src="<?= base_url_assets("assets/images/avatars/uifaces5.jpg") ?>" alt="Craig Hansen"></a>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                              <h4 class="list-group-item-title">
                                <a href="#">Craig Hansen</a>
                              </h4>
                              <p class="list-group-item-text"> Software Developer </p>
                            </div><!-- /.list-group-item-body -->
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure dropdown">
                              <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                              <div class="dropdown-arrow dropdown-arrow-left"></div>
                              <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                              </div>
                            </div><!-- /.list-group-item-figure -->
                          </div><!-- /.list-group-item -->
                          <!-- .list-group-item -->
                          <div class="list-group-item">
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                              <a href="#" class="user-avatar"><img src="<?= base_url_assets("assets/images/avatars/uifaces9.jpg") ?>" alt="Jane Barnes"></a>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                              <h4 class="list-group-item-title">
                                <a href="#">Jane Barnes</a>
                              </h4>
                              <p class="list-group-item-text"> Social Worker </p>
                            </div><!-- /.list-group-item-body -->
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure dropdown">
                              <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                              <div class="dropdown-arrow dropdown-arrow-left"></div>
                              <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                              </div>
                            </div><!-- /.list-group-item-figure -->
                          </div><!-- /.list-group-item -->
                          <!-- .list-group-item -->
                          <div class="list-group-item">
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                              <a href="#" class="user-avatar"><img src="<?= base_url_assets("assets/images/avatars/uifaces4.jpg") ?>" alt="Nicole Barnett"></a>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                              <h4 class="list-group-item-title">
                                <a href="#">Nicole Barnett</a>
                              </h4>
                              <p class="list-group-item-text"> Marketing Manager </p>
                            </div><!-- /.list-group-item-body -->
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure dropdown">
                              <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                              <div class="dropdown-arrow dropdown-arrow-left"></div>
                              <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                              </div>
                            </div><!-- /.list-group-item-figure -->
                          </div><!-- /.list-group-item -->
                          <!-- .list-group-item -->
                          <div class="list-group-item">
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                              <a href="#" class="user-avatar"><img src="<?= base_url_assets("assets/images/avatars/uifaces6.jpg") ?>" alt="Michael Ward"></a>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                              <h4 class="list-group-item-title">
                                <a href="#">Michael Ward</a>
                              </h4>
                              <p class="list-group-item-text"> Lawyer </p>
                            </div><!-- /.list-group-item-body -->
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure dropdown">
                              <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                              <div class="dropdown-arrow dropdown-arrow-left"></div>
                              <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                              </div>
                            </div><!-- /.list-group-item-figure -->
                          </div><!-- /.list-group-item -->
                          <!-- .list-group-item -->
                          <div class="list-group-item">
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                              <a href="#" class="user-avatar"><img src="<?= base_url_assets("assets/images/avatars/uifaces8.jpg") ?>" alt="Juan Fuller"></a>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                              <h4 class="list-group-item-title">
                                <a href="#">Juan Fuller</a>
                              </h4>
                              <p class="list-group-item-text"> Budget analyst </p>
                            </div><!-- /.list-group-item-body -->
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure dropdown">
                              <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                              <div class="dropdown-arrow dropdown-arrow-left"></div>
                              <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                              </div>
                            </div><!-- /.list-group-item-figure -->
                          </div><!-- /.list-group-item -->
                          <!-- .list-group-item -->
                          <div class="list-group-item">
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                              <a href="#" class="user-avatar"><img src="<?= base_url_assets("assets/images/avatars/uifaces7.jpg") ?>" alt="Julia Silva"></a>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                              <h4 class="list-group-item-title">
                                <a href="#">Julia Silva</a>
                              </h4>
                              <p class="list-group-item-text"> Photographer </p>
                            </div><!-- /.list-group-item-body -->
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure dropdown">
                              <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                              <div class="dropdown-arrow dropdown-arrow-left"></div>
                              <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                              </div>
                            </div><!-- /.list-group-item-figure -->
                          </div><!-- /.list-group-item -->
                          <!-- .list-group-item -->
                          <div class="list-group-item">
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                              <a href="#" class="user-avatar"><img src="<?= base_url_assets("assets/images/avatars/uifaces10.jpg") ?>" alt="Joe Hanson"></a>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                              <h4 class="list-group-item-title">
                                <a href="#">Joe Hanson</a>
                              </h4>
                              <p class="list-group-item-text"> Logistician </p>
                            </div><!-- /.list-group-item-body -->
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure dropdown">
                              <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                              <div class="dropdown-arrow dropdown-arrow-left"></div>
                              <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                              </div>
                            </div><!-- /.list-group-item-figure -->
                          </div><!-- /.list-group-item -->
                          <!-- .list-group-item -->
                          <div class="list-group-item">
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                              <a href="#" class="user-avatar"><img src="<?= base_url_assets("assets/images/avatars/uifaces11.jpg") ?>" alt="Brenda Griffin"></a>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                              <h4 class="list-group-item-title">
                                <a href="#">Brenda Griffin</a>
                              </h4>
                              <p class="list-group-item-text"> Medical Assistant </p>
                            </div><!-- /.list-group-item-body -->
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure dropdown">
                              <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                              <div class="dropdown-arrow dropdown-arrow-left"></div>
                              <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                              </div>
                            </div><!-- /.list-group-item-figure -->
                          </div><!-- /.list-group-item -->
                          <!-- .list-group-item -->
                          <div class="list-group-item">
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                              <a href="#" class="user-avatar"><img src="<?= base_url_assets("assets/images/avatars/uifaces12.jpg") ?>" alt="Ryan Jimenez"></a>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                              <h4 class="list-group-item-title">
                                <a href="#">Ryan Jimenez</a>
                              </h4>
                              <p class="list-group-item-text"> Photographer </p>
                            </div><!-- /.list-group-item-body -->
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure dropdown">
                              <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                              <div class="dropdown-arrow dropdown-arrow-left"></div>
                              <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                              </div>
                            </div><!-- /.list-group-item-figure -->
                          </div><!-- /.list-group-item -->
                          <!-- .list-group-item -->
                          <div class="list-group-item">
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                              <a href="#" class="user-avatar"><img src="<?= base_url_assets("assets/images/avatars/uifaces13.jpg") ?>" alt="Bryan Hayes"></a>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                              <h4 class="list-group-item-title">
                                <a href="#">Bryan Hayes</a>
                              </h4>
                              <p class="list-group-item-text"> Computer Systems Analyst </p>
                            </div><!-- /.list-group-item-body -->
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure dropdown">
                              <button class="btn btn-sm btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                              <div class="dropdown-arrow dropdown-arrow-left"></div>
                              <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item">Message</button> <button type="button" class="dropdown-item">Invite to a team</button> <button type="button" class="dropdown-item">Copy member ID</button>
                                <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Remove</button>
                              </div>
                            </div><!-- /.list-group-item-figure -->
                          </div><!-- /.list-group-item -->
                        </div><!-- /.list-group -->
                      </div><!-- /.modal-body -->
                      <!-- .modal-footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      </div><!-- /.modal-footer -->
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <!-- /Modal Members List -->
                <!-- spinner -->
                <div class="p-3 text-center">
                  <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                </div><!-- /spinner -->
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- .app-footer -->
        <footer class="app-footer">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a class="text-muted" href="#">Support</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Help Center</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Privacy</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Terms of Service</a>
            </li>
          </ul>
          <div class="copyright"> Copyright © 2018. All right reserved. </div>
        </footer><!-- /.app-footer -->
        <!-- /.wrapper -->
      </main><!-- /.app-main -->
      <!-- .form -->
      <form id="addNewTask" action="/add-new-task" method="post" enctype="multipart/form-data" name="addNewTask">
        <!-- .modal -->
        <div class="modal fade" id="modalNewTask" tabindex="-1" role="dialog" aria-labelledby="modalNewTaskLabel" aria-hidden="true">
          <!-- .modal-dialog -->
          <div class="modal-dialog modal-lg" role="document">
            <!-- .modal-content -->
            <div class="modal-content px-lg-4 py-lg-3">
              <!-- .modal-header -->
              <div class="modal-header">
                <h6 id="modalNewTaskLabel" class="modal-title"> Add new tasks </h6>
              </div><!-- /.modal-header -->
              <!-- .modal-body -->
              <div class="modal-body">
                <!-- .form-group -->
                <div class="form-group">
                  <label for="tasksTitle">Title</label> <input type="text" name="taskTitle" id="tasksTitle" class="form-control" required="" autocomplete="off" data-autofocus="true">
                </div><!-- /.form-group -->
                <!-- .form-group -->
                <div class="form-group">
                  <div class="d-flex justify-content-between">
                    <label for="taskDescription">Description</label> <a href="#" onclick="boardDemo.ntMarkdown.togglePreview()" tabindex="-1">Preview</a>
                  </div>
                  <textarea name="taskDescription" id="taskDescription" class="form-control"></textarea>
                  <div class="d-flex align-items-center">
                    <span class="text-muted mt-2"><a href="https://simplemde.com/markdown-guide" target="_blank">Markdown</a> is supported</span>
                    <div class="btn btn-reset fileinput-button text-muted ml-auto">
                      <i class="fa fa-paperclip"></i> <span>Attach a file</span> <input type="file" name="taskAttachment">
                    </div>
                  </div>
                </div><!-- /.form-group -->
                <!-- .form-group -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="taskVisibility" class="custom-control-input" id="taskVisibility"> <label class="custom-control-label" for="taskVisibility">Should only be visible to team members.</label>
                  </div>
                </div><!-- /.form-group -->
                <hr>
                <!-- .form-group -->
                <div class="form-group form-row">
                  <!-- .col -->
                  <div class="col-md-6">
                    <!-- .form-group -->
                    <div class="form-group">
                      <label>Assignee</label>
                      <div class="dropdown">
                        <button type="button" class="btn btn-secondary btn-block d-flex justify-content-between align-items-center" id="dntAssignees" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Beni Arisandi + 1 more</span> <span class="fa fa-angle-down"></span></button>
                        <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                        <div class="dropdown-menu dropdown-menu-md stop-propagation" id="dntmAssignees" aria-labelledby="dropdownAssignee1" style="max-height: 30rem; overflow-y: auto;">
                          <h6 id="dropdownAssignee1" class="dropdown-header"> Add assignee </h6>
                          <div class="dropdown-divider"></div>
                          <div class="form-group px-3 py-2 mb-0">
                            <input type="text" class="form-control" data-filter="#dntmAssignees .filterable" placeholder="Search members" autofocus="">
                          </div><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input task-unassignees" name="taskAssignees[]" value="0" data-label="Unassigned"> <span class="custom-control-label">Unassigned</span></label>
                          <div class="dropdown-divider"></div>
                          <h6 class="dropdown-header"> Assignee(s) </h6><label class="custom-control custom-checkbox filterable" data-sort="Beni Arisandi"><input type="checkbox" class="custom-control-input task-assignees" name="taskAssignees[]" value="4" data-label="Beni Arisandi" checked> <span class="custom-control-label custom-control-label-media"><span class="media"><span class="mr-2"><span class="user-avatar"><img src="assets/images/avatars/uifaces1.jpg" alt=""></span></span> <span class="media-body">Beni Arisandi<br>
                                  <span class="text-muted">@benz</span></span></span></span></label> <label class="custom-control custom-checkbox filterable" data-sort="Melissa Day"><input type="checkbox" class="custom-control-input task-assignees" name="taskAssignees[]" value="2" data-label="Melissa Day" checked> <span class="custom-control-label custom-control-label-media"><span class="media"><span class="mr-2"><span class="user-avatar"><img src="assets/images/avatars/uifaces4.jpg" alt=""></span></span> <span class="media-body">Melissa Day<br>
                                  <span class="text-muted">@melday</span></span></span></span></label>
                          <div id="dntDivider" class="dropdown-divider"></div><label class="custom-control custom-checkbox filterable" data-sort="Adam Medina"><input type="checkbox" class="custom-control-input task-assignees" name="taskAssignees[]" value="3" data-label="Adam Medina"> <span class="custom-control-label custom-control-label-media"><span class="media"><span class="mr-2"><span class="user-avatar"><img src="assets/images/avatars/uifaces15.jpg" alt=""></span></span> <span class="media-body">Adam Medina<br>
                                  <span class="text-muted">@amed</span></span></span></span></label> <label class="custom-control custom-checkbox filterable" data-sort="Diana Miller"><input type="checkbox" class="custom-control-input task-assignees" name="taskAssignees[]" value="1" data-label="Diana Miller"> <span class="custom-control-label custom-control-label-media"><span class="media"><span class="mr-2"><span class="user-avatar"><img src="assets/images/avatars/uifaces7.jpg" alt=""></span></span> <span class="media-body">Diana Miller<br>
                                  <span class="text-muted">@dmiller</span></span></span></span></label> <label class="custom-control custom-checkbox filterable" data-sort="Douglas Lucas"><input type="checkbox" class="custom-control-input task-assignees" name="taskAssignees[]" value="5" data-label="Douglas Lucas"> <span class="custom-control-label custom-control-label-media"><span class="media"><span class="mr-2"><span class="user-avatar"><img src="assets/images/avatars/uifaces5.jpg" alt=""></span></span> <span class="media-body">Douglas Lucas<br>
                                  <span class="text-muted">@lucaldoug</span></span></span></span></label>
                        </div><!-- /.dropdown-menu -->
                      </div><!-- /.dropdown -->
                    </div><!-- /.form-group -->
                    <!-- .form-group -->
                    <div class="form-group">
                      <label>Labels</label> <!-- .dropdown -->
                      <div class="dropdown">
                        <button type="button" class="btn btn-secondary btn-block d-flex justify-content-between align-items-center" id="bntLabels" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>No label</span> <span class="fa fa-angle-down"></span></button>
                        <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                        <div class="dropdown-menu dropdown-menu-md stop-propagation" id="dntLabels" aria-labelledby="dropdownTaskLabels1">
                          <h6 id="dropdownTaskLabels1" class="dropdown-header"> Select labels </h6>
                          <div class="dropdown-divider"></div>
                          <div class="form-group px-3 py-2 mb-0">
                            <input type="text" class="form-control" data-filter="#dntLabels .filterable" placeholder="Search" data-autofocus="true">
                          </div><label class="custom-control custom-checkbox filterable"><input type="checkbox" class="custom-control-input task-nolabel" name="taskLabels[]" value="0" data-label="No Label" checked> <span class="custom-control-label">No Label</span></label>
                          <div class="dropdown-divider"></div>
                          <div class="dropdown-scroll">
                            <label class="custom-control custom-checkbox filterable"><input type="checkbox" class="custom-control-input task-label" name="taskLabels[]" value="1" data-label="Assets"> <span class="custom-control-label"><i class="fa fa-square fa-lg text-blue mr-1"></i> Assets</span></label> <label class="custom-control custom-checkbox filterable"><input type="checkbox" class="custom-control-input task-label" name="taskLabels[]" value="2" data-label="Build Tools"> <span class="custom-control-label"><i class="fa fa-square fa-lg text-indigo mr-1"></i> Build Tools</span></label> <label class="custom-control custom-checkbox filterable"><input type="checkbox" class="custom-control-input task-label" name="taskLabels[]" value="3" data-label="Components"> <span class="custom-control-label"><i class="fa fa-square fa-lg text-purple mr-1"></i> Components</span></label> <label class="custom-control custom-checkbox filterable"><input type="checkbox" class="custom-control-input task-label" name="taskLabels[]" value="4" data-label="Dependencies"> <span class="custom-control-label"><i class="fa fa-square fa-lg text-pink mr-1"></i> Dependencies</span></label> <label class="custom-control custom-checkbox filterable"><input type="checkbox" class="custom-control-input task-label" name="taskLabels[]" value="5" data-label="Design"> <span class="custom-control-label"><i class="fa fa-square fa-lg text-red mr-1"></i> Design</span></label> <label class="custom-control custom-checkbox filterable"><input type="checkbox" class="custom-control-input task-label" name="taskLabels[]" value="6" data-label="Documentation"> <span class="custom-control-label"><i class="fa fa-square fa-lg text-orange mr-1"></i> Documentation</span></label> <label class="custom-control custom-checkbox filterable"><input type="checkbox" class="custom-control-input task-label" name="taskLabels[]" value="7" data-label="Doing"> <span class="custom-control-label"><i class="fa fa-square fa-lg text-yellow mr-1"></i> Doing</span></label> <label class="custom-control custom-checkbox filterable"><input type="checkbox" class="custom-control-input task-label" name="taskLabels[]" value="8" data-label="JS"> <span class="custom-control-label"><i class="fa fa-square fa-lg text-green mr-1"></i> JS</span></label> <label class="custom-control custom-checkbox filterable"><input type="checkbox" class="custom-control-input task-label" name="taskLabels[]" value="9" data-label="SCSS"> <span class="custom-control-label"><i class="fa fa-square fa-lg text-teal mr-1"></i> SCSS</span></label> <label class="custom-control custom-checkbox filterable"><input type="checkbox" class="custom-control-input task-label" name="taskLabels[]" value="10" data-label="To Do"> <span class="custom-control-label"><i class="fa fa-square fa-lg text-cyan mr-1"></i> To Do</span></label>
                          </div>
                          <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Create new label</a> <a href="#" class="dropdown-item">Manage labels</a>
                        </div><!-- /.dropdown-menu -->
                      </div><!-- /.dropdown -->
                    </div><!-- /.form-group -->
                  </div><!-- /.col -->
                  <!-- .col -->
                  <div class="col-md-6">
                    <!-- .form-group -->
                    <div class="form-group">
                      <label class="control-label" for="taskDueDate">Due date</label>
                      <div class="input-group input-group-alt flatpickr" data-toggle="flatpickr" data-wrap="true" data-min-date="today">
                        <input name="taskDueDate" id="taskDueDate" type="text" class="form-control" data-input="">
                        <div class="input-group-append">
                          <button type="button" class="btn btn-secondary" data-toggle=""><i class="far fa-calendar"></i></button> <button type="button" class="btn btn-secondary" data-clear=""><i class="fa fa-times"></i></button>
                        </div>
                      </div>
                    </div><!-- /.form-group -->
                  </div><!-- /.col -->
                </div><!-- /.form-group -->
                <hr>
                <!-- .form-group -->
                <div class="form-group">
                  <div class="d-flex justify-content-between">
                    <label>Todos</label> <span id="ntTodosMeter" class="text-muted">(0/1)</span>
                  </div><!-- .progress -->
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                      <span class="sr-only">0% Complete</span>
                    </div>
                  </div><!-- /.progress -->
                </div><!-- /.form-group -->
                <!-- .form-group -->
                <div class="form-group">
                  <!-- save task todos to this input hidden -->
                  <input type="hidden" name="ntTodos" value="[{id:0, desc:Eat corn on the cob, checked: false}]"> <!-- .todo-list -->
                  <div id="ntTodos" class="todo-list">
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo0" value="0"> <label class="custom-control-label" for="todo0">Eat corn on the cob</label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions pr-1">
                        <button type="button" class="btn btn-sm btn-light" onclick="boardDemo.removeNtTodo(0)">Delete</button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                  </div><!-- /.todo-list -->
                  <!-- .publisher -->
                  <div class="publisher">
                    <!-- .publisher-input -->
                    <div class="publisher-input pr-0">
                      <input id="ntTodosInpt" class="form-control form-control-reflow" placeholder="Add a todo" autocomplete="off">
                    </div><!-- /.publisher-input -->
                    <!-- .publisher-actions -->
                    <div class="publisher-actions">
                      <!-- .publisher-tools -->
                      <div class="publisher-tools pb-0">
                        <button id="ntTodosAdd" type="button" class="btn btn-secondary">Add</button> <button id="ntTodosClear" type="button" class="btn btn-light"><i class="fa fa-times"></i></button>
                      </div><!-- /.publisher-tools -->
                    </div><!-- /.publisher-actions -->
                  </div><!-- /.publisher -->
                </div><!-- /.form-group -->
              </div><!-- /.modal-body -->
              <hr>
              <!-- .modal-footer -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button> <button type="reset" class="btn btn-light" data-dismiss="modal">Cancel</button>
              </div><!-- /.modal-footer -->
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </form><!-- /.form -->