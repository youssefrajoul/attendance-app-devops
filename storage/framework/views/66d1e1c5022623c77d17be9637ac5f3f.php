<?php $__env->startSection('liste'); ?>
    <h1>Liste des étudiants</h1>
    <table class="customTable">
        <tr>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Groupe</th>
        </tr>
        <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($student->matricule); ?></td>
                <td><?php echo e($student->nom); ?></td>
                <td><?php echo e($student->prenom); ?></td>
                <td><?php echo e($student->groupe); ?></td>
                <td> 
                    <form action='/students/delete/<?php echo e($student->matricule); ?>' method='POST'> 
                        <?php echo csrf_field(); ?> 
                        <input type ='hidden' name='_method' value='delete'> 
                        <button type='submit'> supprimer </button> 
                    </form> 
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('formulaire'); ?>
    <h2>Formulaire d'Insertion d'Étudiant</h2>
    <form action="/student" method="post">

        <?php echo csrf_field(); ?>
        
        <label for="matricule">Matricule :</label>
        <input type="text" name="matricule" id="matricule" required><br><br>

        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required><br><br>

        <label for="groupe">Groupe :</label>
        <input type="text" name="groupe" id="groupe" required><br><br>

        <input type="submit" value="Ajouter Étudiant">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('canevas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/youssef/bloc3/prjg5/devops/prjg5-devops/resources/views/form.blade.php ENDPATH**/ ?>