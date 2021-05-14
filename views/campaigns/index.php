<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Campaign Id</th>
        <th scope="col">Campaign Name</th>
        <th scope="col">Total Revenue</th>
    </tr>
    </thead>
    <tbody>
    <?php if ($this->campaigns) { ?>
        <?php foreach ($this->campaigns as $campaign) { ?>
            <tr>
                <td><?php echo $campaign['id']; ?></td>
                <td><?php echo $campaign['campaign_name']; ?></td>
                <td><?php echo empty($campaign['total']) ? '0.00' : $campaign['total']; ?></td>
            </tr>
        <?php } ?>
    <?php } else { ?>
        <tr>
            <td colspan="3">No Data</td>
        </tr>
    <?php } ?>
    </tbody>
</table>