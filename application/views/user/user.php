
<div class="container mt-4 mx-5">

    <div class="d-flex flex-row td-margin">
        <h5 class="card-title">Users

            <?php foreach ($links as $link): ?>
                <a href="<?=site_url($link['link'])?>" class="btn btn-outline-primary btn-sm py-0 px-1" role="button">
                    <?php if ($link['caption'] != null): ?>
                        <?=$link['caption']?>
                    <?php endif; ?>
                </a>
            <?php endforeach; ?>
        </h5>
    </div>

    <div class="card border-dark">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Email</th>
                <th scope="col">Edit</th>
                <th scope="col">Remove</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> 1
                    <!--<?=$assoc['id']?>-->
                </td>
                <td> Shaun
                    <!--<?=$assoc['l_name']?>-->
                </td>
                <td> Vassallo
                    <!--<?=$assoc['l_surname']?>-->
                </td>
                <td> myemail@email.com
                    <!--<?=$assoc['l_email']?>-->
                </td>
                <td> <a href="" class="text-dark"> Edit </a> </td>
                <!--edit-jellyfish.php?id=<?=$assoc['id']?>-->
                <td> <a href="" class="text-dark">Remove</a> </td>
                <!--delete-jellyfish.php?id=<?=$assoc['id']?>-->
            </tr>
        </tbody>
    </table>
</div>
</div>
