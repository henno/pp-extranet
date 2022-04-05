<div class="row">

    <h1>Companies</h1>

    <div class="table-responsive">

        <table class="table table-striped table-bordered clickable-rows">

            <thead>

            <tr>
                <th>ID</th>
                <th><?= __('Company Name') ?></th>
            </tr>

            </thead>

            <tbody>

            <?php foreach ($companies as $company): ?>
                <tr data-href="companies/<?= $company['company_id'] ?>">
                    <td><?= $company['company_id'] ?></td>
                    <td><?= $company['company_name'] ?></td>
                </tr>
            <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>
