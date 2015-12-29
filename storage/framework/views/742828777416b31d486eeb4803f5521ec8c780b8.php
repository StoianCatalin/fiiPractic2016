<?php $__env->startSection('content'); ?>
    <section id="top" class="nonIndex">
        <div class="ui container">
            <div class="ui stackable grid">
                <div class="ten wide column">
                    <img src="/images/indexBg.png" alt="Graphic" class="vectorGraphic" />
                    <div class="continutGraph"></div>
                </div>
                <div class="six wide column">
                    <h1 class="ui header">F.A.Q.</h1>
                </div>
            </div>
        </div>
    </section>
    <section id="despre">
        <div class="ui container">
            <ul class="questionTab">
                <li>
                    <a href="">Categorie1</a>
                    <ul>
                        <li><a href="">Intrebare1</a></li>
                        <li><a href="">Intrebare2</a></li>
                        <li><a href="">Intrebare3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">Categorie2</a>
                    <ul>
                        <li><a href="">Intrebare1</a></li>
                        <li><a href="">Intrebare2</a></li>
                        <li><a href="">Intrebare3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">Categorie3</a>
                    <ul>
                        <li><a href="">Intrebare1</a></li>
                        <li><a href="">Intrebare2</a></li>
                        <li><a href="">Intrebare3</a></li>
                    </ul>
                </li>
            </ul>
            <div class="questions">
                <h2 class="ui header" id="categorie1">Categorie 1</h2>
                <div class="que">
                    <span id="idOfQuestion">This is the first questions?</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mi leo, interdum quis ornare et, viverra eget nibh. Nullam elit.</p>
                </div>
                <div class="que">
                    <span id="idOfQuestion">This is the first questions?</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mi leo, interdum quis ornare et, viverra eget nibh. Nullam elit.</p>
                </div>
                <div class="que">
                    <span id="idOfQuestion">This is the first questions?</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mi leo, interdum quis ornare et, viverra eget nibh. Nullam elit.</p>
                </div>

            </div>
            <div class="clearfloat"></div>
        </div>
    </section>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>