<?php $__env->startSection('content'); ?>
    <div class="thirteen wide column">
        <h2 class="ui header">Training-urile mele</h2>
        <div class="ui segment">
            <table class="ui celled table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nume Training</th>
                    <th>Numar locuri</th>
                    <th>Actiuni</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Example training</td>
                    <td>23/30</td>
                    <td>
                        <div class="ui icon buttons trainBut">
                            <button data-id="1" data-content="Sterge Training" class="ui button stergeTrainButt"><i class="icon delete"></i></button>
                            <a href="/trainer/selectParticipants/321"><button data-content="Adauga participanti" class="ui button"><i class="icon add user"></i></button></a>
                            <button data-content="Editeaza Training" class="ui button"><i class="icon write"></i></button>
                        </div>
                    </td>
                </tr>
                <tr class="aprove">
                    <td>2</td>
                    <td>Training JavaScript</td>
                    <td>30/30</td>
                    <td>
                        <div class="ui icon buttons trainBut">
                            <button data-id="2" data-content="Sterge Training" class="ui button stergeTrainButt"><i class="icon delete"></i></button>
                            <a href="/trainer/selectParticipants/321"><button data-content="Adauga participanti" class="ui button"><i class="icon add user"></i></button></a>
                            <button data-content="Editeaza Training" class="ui button"><i class="icon write"></i></button>
                        </div>
                    </td>
                </tr>
                <tr class="negative">
                    <td>3</td>
                    <td>Training AngularJS</td>
                    <td>31/30</td>
                    <td>
                        <div class="ui icon buttons trainBut">
                            <button data-id="3" data-content="Sterge Training" class="ui button stergeTrainButt"><i class="icon delete"></i></button>
                            <a href="/trainer/selectParticipants/321"><button data-content="Adauga participanti" class="ui button"><i class="icon add user"></i></button></a>
                            <button data-content="Editeaza Training" class="ui button"><i class="icon write"></i></button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('trainer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>