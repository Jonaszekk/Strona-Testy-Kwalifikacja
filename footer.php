<footer>
    <div id="page-container">
        <div id="content-wrap">
            <div class="row footer">
                <div class="col-md-3 box">
                    <a href="https://github.com/AntonC1/Test-kwalfikacji-" target="_blank">O nas</a>
                </div>
                <div class="col-md-3 box">
                    <a href="#" data-toggle="modal" data-target="#login">Admin Login</a>
                </div>
                <div class="col-md-3 box">
                    <a href="#" data-toggle="modal" data-target="#developers">Developers</a>
                </div>
                <div class="col-md-3 box">
                    <a href="feedback.php" target="_blank">Zgłoszenie</a>
                </div>
            </div>
            <!-- Modal For Developers-->
            <div class="modal fade title1" id="developers">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" style="font-family:'typo' "><span style="color:Blue">Developers</span></h4>
                        </div>
                        <div class="modal-body">
                            <p>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="photos/download.png" width=100 height=100 class="img-rounded">
                                </div>
                                <div class="col-md-5">
                                    <a href="https://github.com/AntonC1/Test-kwalfikacji-/" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Antoni Ciszewski | Jan Andrzejewski</a>
                                    <h4 style="font-family:'typo'; color:#202020">antonciszewski@gmail.com | jan_andrzejewski@outlook.com</h4>
                                    <h4 style="font-family:'typo'; color:#202020 ">Technikum nr.19 w Łodzi</h4>
                                </div>
                            </div>
                            </p>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!--Modal for admin login-->
            <div class="modal fade" id="login">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                            <h4 class="modal-title"><span style="color:black;font-family:'typo' ">Zaloguj</span></h4>
                        </div>
                        <div class="modal-body title1">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <form role="form" method="post" action="admin.php?q=index.php">
                                        <div class="form-group">
                                            <input type="text" name="uname" maxlength="20" placeholder="Admin e-mail" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" maxlength="15" placeholder="Hasło" class="form-control" />
                                        </div>
                                        <div class="form-group" align="center">
                                            <input type="submit" name="login" value="Zaloguj" class="btn btn-primary btn-lg" />
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                        <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
</footer>
<!--footer end-->