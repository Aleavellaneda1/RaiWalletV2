    <div id="wrapper" class="wallet-wrapper" style="display:none">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        NANOWALLET
                    </a>
                </li>
                <li class="active">
                    <a href="#" id="ghome"><i class="fa fa-home" aria-hidden="true" style="display:inline"></i> Home</a>
                </li>
                <li>
                    <a href="#" id="gtxs"><i class="fa fa-exchange" aria-hidden="true" style="display:inline"></i> Transactions</a>
                </li>
                <li>
                    <a href="#" id="gtxs"><i class="fa fa-id-badge" aria-hidden="true" style="display:inline"></i> Alias</a>
                </li>
                <li>
                    <a href="#" id="gsettings"><i class="fa fa-cogs" aria-hidden="true" style="display:inline"></i> Settings</a>
                </li>
                <li>
                    <a href="#" id="gsecurity"><i class="fa fa-lock" aria-hidden="true" style="display:inline"></i> Security</a>
                </li>
                <li>
                    <a href="#" id="gdebug"><i class="fa fa-bug" aria-hidden="true" style="display:inline"></i> Debug</a>
                </li>
                <li>
                    <a href="/out" id="gout"><i class="fa fa-sign-out" aria-hidden="true" style="display:inline"></i> Sign Out</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" style="padding:0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 b-line">
                        <div class="col-md-12 main-box">
                            <div class="row">
                                <div class="col-xs-6 buttons">
                                    <h2 style="font-weight:700">YOUR NANO, ANYWHERE.</h2>
                                    <a href="#menu-toggle" class="btn btn-info" id="menu-toggle">Toggle Menu</a>
                                    <button type="button" class="btn btn-primary" id="send">Send</button>
                                    <button type="button" class="btn btn-primary" id="receive">Receive</button>
                                    <button type="button" class="btn btn-primary" id="change">Change</button>
                                </div>
                                <div class="col-xs-6 text-right" id="refresh">
                                    <h2><span id="balance">0</span> NANO</h2>
                                    <h4>(<span id="pending">0</span> pending)</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- DASHBOARD -->
                <div class="row dashboard current">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <h3>Pending Blocks </h3>
                            <small style="color: #666;">Pending transactions will appear here</small>
                            <div class="recent">
                                <ul>

                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <h3>Your account(s)</h3>
                            <div class="accounts">
                                <ul>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Transactions -->
                <div class="row transactions" style="display:none">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <h3>Last Transactions</h3>
                            <div class="acc-selector">
                                <select name="acc" id="acc-select" class="form-control" style="font-family:monospace">
                                    
                                </select>
                            </div>
                            <div class="txs">
                                <ul>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Settings -->
                <div class="row settings" style="display:none">
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>Minimum Receive Amount</h3>
                            <p>
                                Enter below the minimum amount in a receive transaction you want to spend PoW in. Lower amounts will not be 
                                pocketed. You can change this setting whenever you wish.
                            </p>
                            <form method="post" class="form-minimum">
                                <div class="form-group">
                                    <label>Minimum receive amount </label>
                                    <input type="text" name="minimum_receive" id="minimum_receive" class="form-control" placeholder="e.g.: 1000000" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" id="change_minimum" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>Generate PoW Locally</h3>
                            <p>
                                Uncheck this option if your computer takes a long time to generate PoW or if you are using a mobile device. 
                                It's faster when using Mozilla Firefox.
                            </p>
                            <form method="post" class="form-pow">
                                <div class="form-group">
                                    <label>Local PoW</label>
                                    <input type="checkbox" name="local_pow" id="pow_checkbox" checked />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>Change Alias</h3>
                            <p>
                                You can set an alias to login without having to copy the hex identifier every single time :P <br/>
                                Once set it cannot be changed.
                            </p>
                            <form method="post" class="form-alias">
                                <div class="form-group">
                                    <label>Alias</label>
                                    <input type="text" name="alias" id="alias" class="form-control" placeholder="e.g.: johndoe" autocomplete="off" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" id="change_alias" class="btn btn-primary">
                                        Set Alias
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>Auto SignOut time</h3>
                            <p>
                                By default, you are signed out from your wallet after 30 minutes of inactivity. You can customize that time here.
                            </p>
                            <form method="post" class="form-autologout">
                                <div class="form-group">
                                    <label>Sign out after: (minutes)</label>
                                    <input type="text" name="time" id="aso_time" class="form-control" placeholder="e.g.: 10" autocomplete="off" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="autologout" class="btn btn-primary" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Security -->
                <div class="row security" style="display:none">
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>Wallet Seed</h3>
                            <p>
                                If you haven't already, please, back up your seed. With it, you will be able to recover your funds in case you lose your password or your wallet data. 
                            </p>
                            <form method="post">
                                <div class="form-group">
                                    <label>Seed</label>
                                    <input type="text" name="seed" id="seed_backup" class="form-control" disabled value="<?php for($i = 0; $i < 64; $i++) echo '&#9679;'; ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Enter your password to unlock the seed</label>
                                    <input type="password" name="pass" id="seed_pass" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary" id="seed_button">
                                        Show Seed
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>Change Password</h3>
                            <p>
                                You can change your wallet password here. Just make sure you don't forget it! 
                            </p>
                            <form method="post">
                                <div class="form-group">
                                    <label>Current Password</label>
                                    <input type="password" name="current" id="change-pass-current" class="form-control"/>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" name="new1" id="change-pass-new1" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Enter the new password again</label>
                                    <input type="password" name="new2" id="change-pass-new2" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary" id="change-pass">
                                        Change
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>2 Factor Authentication</h3>
                            <p>
                                Increase your wallet security adding 2FA (Google authenticator, Authy, etc.).
                            </p>
                            <form method="post" class="2fa_set_form">
                                <div class="form-group" id="qr_2fa"></div>
                                <div class="form-group"><label id="2fa_key"></label></div>
                                <div class="form-group" id="2fa_confirm" style="display:none">
                                    <label for="2facode">Enter 2fa code to confirm the action</label>
                                    <input type="text" name="2fa" id="2fa_confirm_input" class="form-control" placeholder="e.g.: 000000" />
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary" id="button_2fa">
                                        Enable
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>Password Stretching Iterations</h3>
                            <p>
                                The higher the number the more difficult it will be to brute force your password and decrypt your wallet.
                                But it will also increase the time your browser will need to decrypt it.
                            </p>
                            <form method="post">
                                <div class="form-group">
                                    <label>PBKDF2 Iterations</label>
                                    <input type="text" name="iterations" id="iteration_number" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary" id="change-iterations">
                                        Change
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    -->
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>Download Wallet Data</h3>
                            <p>
                                Just in case, you can also download your wallet data ciphered. Having the seed is far more efficient, 
                                but who knows, you may want to have it :P <br/>
                                Also, as our code is open-source you can develop your own wallet starting from there and load it with your keys
                                or something.
                            </p>
                            <form method="post">
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary" id="download_wallet">
                                        Download
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Debug -->
                <div class="row debug" style="display:none">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <h3>Logs</h3>
                            <pre id="debug-box">
                            
                            </pre>
                            <h4>
                                Pending Blocks
                            </h4>
                            <pre id="pending-blocks">
                            
                            </pre>
                            <h4>
                                Ready Blocks
                            </h4>
                            <pre id="ready-blocks">
                            
                            </pre>
                            <button type="button" class="btn btn-primary" id="refreshdebug">
                                Refresh
                            </button>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
        <!-- /#page-content-wrapper -->
        
    </div>
    <!-- /#wrapper -->




