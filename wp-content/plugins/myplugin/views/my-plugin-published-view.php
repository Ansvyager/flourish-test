<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.css">
<style>
.table.dataTable {
    border: solid 1px rgba(255, 255, 255, 0.05);
}

table.dataTable td,
table.dataTable th {
    font-size: .8rem;
}

label,
#my-plugin-published-table_info {
    color: white;
}

.page-link {
    background-color: #343a40;
    border: solid 2px rgba(255, 255, 255, 0.05) !important;
}

.page-item.disabled .page-link {
    background-color: rgba(255, 255, 255, 0.05);
}

.page-link:hover {
    background-color: rgba(255, 255, 255, 0.164);
}


@media screen and (min-width: 768px) {
    .table-responsive {
        overflow-x: hidden;
    }
}
</style>
<div class="wrap container mt-5">
    <h1 class="text-center text-white">List Table</h1>
    <div class="table-responsive">
        <table id="my-plugin-published-table" class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start Date</th>
                    <th>Salary</th>
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
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.bootstrap4.js"></script>

    <script>
    new DataTable('#my-plugin-published-table');
    </script>
</div>