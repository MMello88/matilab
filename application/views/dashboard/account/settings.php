                  <!-- grid column -->
                  <div class="col-lg-8">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <h6 class="card-header"> Public Profile </h6><!-- .card-body -->
                      <div class="card-body">
                        <!-- .media -->
                        <div class="media mb-3">
                          <!-- avatar -->
                          <div class="user-avatar user-avatar-xl fileinput-button">
                            <div class="fileinput-button-label"> Change photo </div><img src="assets/images/avatars/profile.jpg" alt=""> <input id="fileupload-avatar" type="file" name="avatar">
                          </div><!-- /avatar -->
                          <!-- .media-body -->
                          <div class="media-body pl-3">
                            <h3 class="card-title"> Public avatar </h3>
                            <h6 class="card-subtitle text-muted"> Click the current avatar to change your photo. </h6>
                            <p class="card-text">
                              <small>JPG, GIF or PNG 400x400, &lt; 2 MB.</small>
                            </p><!-- The avatar upload progress bar -->
                            <div id="progress-avatar" class="progress progress-xs fade">
                              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><!-- /avatar upload progress bar -->
                          </div><!-- /.media-body -->
                        </div><!-- /.media -->
                        <!-- form -->
                        <form method="post">
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <label for="input01" class="col-md-3">Cover image</label> <!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-9 mb-3">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="input01" multiple> <label class="custom-file-label" for="input01">Choose cover</label>
                              </div><small class="text-muted">Upload a new cover image, JPG 1200x300</small>
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <label for="input02" class="col-md-3">Company</label> <!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-9 mb-3">
                              <input type="text" class="form-control" id="input02" value="CreativeDivision">
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <label for="input03" class="col-md-3">Profile Heading</label> <!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-9 mb-3">
                              <textarea class="form-control" id="input03">Huge fan of HTML, CSS and Javascript. Web design and open source lover.</textarea> <small class="text-muted">Appears on your profile page, 300 chars max.</small>
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <label for="input04" class="col-md-3">Available for hire?</label> <!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-9 mb-3">
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="input04" checked> <label class="custom-control-label" for="input04">Yes, hire me</label>
                              </div>
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <hr>
                          <!-- .form-actions -->
                          <div class="form-actions">
                            <button type="submit" class="btn btn-primary ml-auto">Update Profile</button>
                          </div><!-- /.form-actions -->
                        </form><!-- /form -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                    <!-- .card -->
                    <div class="card card-fluid">
                      <h6 class="card-header"> Social Networks </h6><!-- form -->
                      <form method="post">
                        <!-- .list-group -->
                        <div class="list-group list-group-flush mt-3 mb-0">
                          <!-- .list-group-item -->
                          <div class="list-group-item">
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                              <div class="tile tile-md bg-twitter">
                                <i class="fab fa-twitter"></i>
                              </div>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                              <input type="text" class="form-control" id="twitter" placeholder="Twitter Username" value="@stilearningTwit">
                            </div><!-- /.list-group-item-body -->
                          </div><!-- /.list-group-item -->
                          <!-- .list-group-item -->
                          <div class="list-group-item">
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                              <div class="tile tile-md bg-facebook">
                                <i class="fab fa-facebook-f"></i>
                              </div>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                              <input type="text" class="form-control" id="facebook" placeholder="Facebook Username">
                            </div><!-- /.list-group-item-body -->
                          </div><!-- /.list-group-item -->
                          <!-- .list-group-item -->
                          <div class="list-group-item">
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                              <div class="tile tile-md bg-linkedin">
                                <i class="fab fa-linkedin"></i>
                              </div>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                              <input type="text" class="form-control" id="linkedin" placeholder="Linkedin Username">
                            </div><!-- /.list-group-item-body -->
                          </div><!-- /.list-group-item -->
                          <!-- .list-group-item -->
                          <div class="list-group-item">
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                              <div class="tile tile-md bg-dribbble">
                                <i class="fab fa-dribbble"></i>
                              </div>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                              <input type="text" class="form-control" id="dribbble" placeholder="Dribbble Username">
                            </div><!-- /.list-group-item-body -->
                          </div><!-- /.list-group-item -->
                          <!-- .list-group-item -->
                          <div class="list-group-item">
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                              <div class="tile tile-md bg-github">
                                <i class="fab fa-github"></i>
                              </div>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                              <input type="text" class="form-control" id="github" placeholder="Github Username">
                            </div><!-- /.list-group-item-body -->
                          </div><!-- /.list-group-item -->
                        </div><!-- /.list-group -->
                        <!-- .card-body -->
                        <div class="card-body">
                          <hr>
                          <!-- .form-actions -->
                          <div class="form-actions">
                            <button type="submit" class="btn btn-primary ml-auto">Update Socials</button>
                          </div><!-- /.form-actions -->
                        </div><!-- /.card-body -->
                      </form><!-- /form -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->