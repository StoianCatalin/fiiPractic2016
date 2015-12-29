<?php $__env->startSection('content'); ?>
    <div class="thirteen wide column">
        <h2 class="ui header">Adauga Training</h2>
        <div class="ui segment">
            <div class="ui container">
                <div class="ui form">
                    <div class="field">
                        <label>Nume training</label>
                        <input placeholder="Nume training" type="text">
                    </div>
                    <div class="field">
                        <label>Descriere</label>
                        <textarea></textarea>
                    </div>
                    <div class="field">
                        <label>Arie</label>
                        <select class="ui search dropdown selecteazaArie">
                            <option value="">Arii de studiu...</option>
                            <option>Front End Development</option>
                            <option>Back End Development</option>
                            <option>Design Graphic</option>
                            <option>Android Pro</option>
                            <option>Game Development</option>
                            <option>DevOps</option>
                            <option>Project Management</option>
                            <option>Communication Skills</option>
                            <option>Management Antreprenorial</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Numar locuri</label>
                        <input placeholder="Numar locuri" type="text">
                    </div>
                    <div class="field">
                        <label>Imagine</label>
                        <input placeholder="Imagine de coperta" type="file">
                    </div>
                    <div class="intrebariFields">
                        <div class="field">
                            <label>Intrebare 1</label>
                            <input placeholder="Intrebare 1" type="text">
                        </div>
                        <div class="clearfloat"></div>
                    </div>
                    <button class="ui leftFloat labeled icon green button adaugaIntrebare">
                        <i class="icon add"></i>
                        Adauga intrebare
                    </button>
                    <button class="ui rightFloat labeled icon blue button">
                        <i class="icon send"></i>
                        Adauga Training
                    </button>
                    <div class="clearfloat"></div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('trainer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>