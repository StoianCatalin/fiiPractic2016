<?php $__env->startSection('content'); ?>
    <section class="loginRegister">
        <div class="container">
            <a href="/"><div class="logo"><img src="/images/logo.png" alt="Logo FiiPractic" /></div></a>
            <div class="ui segment">
                <div class="ui two column middle aligned very relaxed stackable grid">
                    <div class="column">
                        <div class="ui form warning loginIndividual">
                            <div class="field">
                                <label>Email</label>
                                <div class="ui left icon input">
                                    <input placeholder="Email" type="text" name="email">
                                    <i class="mail icon"></i>
                                </div>
                            </div>
                            <div class="field">
                                <label>Parola</label>
                                <div class="ui left icon input">
                                    <input placeholder="Parola" type="password" name="password">
                                    <i class="lock icon"></i>
                                </div>
                            </div>
                            <div class="center">
                                <div class="ui blue submit fluid button">Conecteaza-te</div>
                            </div>
                            <div class="ui message success"></div>
                            <div class="ui message warning"></div>
                        </div>
                    </div>
                    <div class="ui vertical divider">
                        SAU
                    </div>
                    <div class="right aligned column">
                        <div class="ui form warning registerIndividual">
                            <div class="field">
                                <div class="ui left icon input">
                                    <i class="icon user"></i>
                                    <input placeholder="Numele tau" type="text" name="name">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui left icon input">
                                    <i class="icon mail"></i>
                                    <input placeholder="Email" type="text" name="email">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui left icon input">
                                    <i class="icon world"></i>
                                    <input placeholder="Adresa" type="text" name="address">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui left icon input">
                                    <i class="icon phone"></i>
                                    <input placeholder="Numar de telefon" type="text" name="phone">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui left icon input">
                                    <input placeholder="Parola" type="password" name="password">
                                    <i class="lock icon"></i>
                                </div>
                            </div>
                            <div class="center">
                                <div class="ui green submit fluid button">Inscrie-te</div>
                            </div>
                            <input type="hidden" name="token" value="<?php echo csrf_token(); ?>" />
                            <div class="ui message success"></div>
                            <div class="ui message warning"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('.loginRegister').css('min-height', ($(window).height()-65)+"px");
    </script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>