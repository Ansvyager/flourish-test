<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.css">

<div class="wrap">
    <div id="action-alert" class="alert" role="alert" style="display: none;">
        <!-- This content will be dynamically updated -->
    </div>

    <h1>My Plugin Items</h1>
    <form method="post">
        <input type="hidden" name="action" value="create">
        <input type="text" name="item_name" placeholder="Name" required>
        <input type="text" name="item_position" placeholder="Position" required>
        <input type="text" name="item_office" placeholder="Office" required>
        <input type="number" name="item_age" placeholder="Age" required>
        <input type="date" name="item_start_date" placeholder="Start Date" required>
        <input type="text" name="item_salary" placeholder="Salary" required>
        <input type="submit" value="Add Item" class="button button-primary">
    </form>

    <table class="wp-list-table widefat fixed striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start Date</th>
                <th>Salary</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item) : ?>
            <tr>
                <td><?php echo esc_html($item->no); ?></td>
                <td><?php echo esc_html($item->name); ?></td>
                <td><?php echo esc_html($item->position); ?></td>
                <td><?php echo esc_html($item->office); ?></td>
                <td><?php echo esc_html($item->age); ?></td>
                <td><?php echo esc_html($item->start_date); ?></td>
                <td><?php echo esc_html('$' . number_format(floatval($item->salary), 2, '.', ',')); ?></td>
                <td><?php echo esc_html($item->status); ?></td>
                <td>
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="item_id" value="<?php echo esc_attr($item->id); ?>">
                        <input type="text" placeholder="name" name="item_name"
                            value="<?php echo esc_attr($item->name); ?>" required>
                        <input type="text" placeholder="position" name="item_position"
                            value="<?php echo esc_attr($item->position); ?>" required>
                        <input type="text" placeholder="office" name="item_office"
                            value="<?php echo esc_attr($item->office); ?>" required>
                        <input type="number" placeholder="age" name="item_age"
                            value="<?php echo esc_attr($item->age); ?>" required>
                        <input type="date" placeholder="start date" name="item_start_date"
                            value="<?php echo esc_attr($item->start_date); ?>" required>
                        <input type="text" name="item_salary" placeholder="Salary"
                            value="<?php echo esc_attr($item->salary); ?>" required>
                        <input type="submit" value="Update" class="button button-primary">
                    </form>
                    <?php if ($item->status == 'published') : ?>
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="action" value="unpublish">
                        <input type="hidden" name="item_id" value="<?php echo esc_attr($item->id); ?>">
                        <input type="submit" value="Unpublish" class="button button-secondary">
                    </form>
                    <?php else : ?>
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="action" value="publish">
                        <input type="hidden" name="item_id" value="<?php echo esc_attr($item->id); ?>">
                        <input type="submit" value="Publish" class="button button-primary">
                    </form>
                    <?php endif; ?>
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="item_id" value="<?php echo esc_attr($item->id); ?>">
                        <input type="submit" value="Delete" class="button button-secondary">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </d>

    <!-- <script>
    <?php if (isset($_POST['action'])) : ?>
    <?php $action = $_POST['action']; ?>
    <?php if ($action === 'create') : ?>
    alert('create success');
    <?php elseif ($action === 'update') : ?>
    alert('update success');
    <?php elseif ($action === 'delete') : ?>
    alert('delete success');
    <?php endif; ?>
    <?php endif; ?>
    </script> -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        <?php if (isset($_POST['action'])) : ?>
        <?php $action = $_POST['action']; ?>
        var alertMessage = '';
        var alertClass = 'alert-primary';

        <?php if ($action === 'create') : ?>
        alertMessage = 'Create success';
        <?php elseif ($action === 'update') : ?>
        alertMessage = 'Update success';
        <?php elseif ($action === 'delete') : ?>
        alertMessage = 'Delete success';
        alertClass = 'alert-danger';
        <?php elseif ($action === 'publish') : ?>
        alertMessage = 'Data has Published';
        <?php elseif ($action === 'unpublish') : ?>
        alertMessage = 'Data Unpublished';
        alertClass = 'alert-danger';
        <?php endif; ?>

        if (alertMessage) {
            var alertDiv = document.getElementById('action-alert');
            alertDiv.textContent = alertMessage;
            alertDiv.className = 'alert ' + alertClass; // Update class
            alertDiv.style.display = 'block';

            // Hide the alert after 3 seconds
            setTimeout(function() {
                alertDiv.style.display = 'none';
            }, 5000);
        }
        <?php endif; ?>
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.bootstrap4.js"></script>