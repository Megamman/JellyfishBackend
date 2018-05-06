<div class="card border-dark mt-4 mx-5">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Jellyfish Name</th>
                <th scope="col">Scientific Name</th>
                <th scope="col">Colours</th>
                <th scope="col">Sting</th>
                <th scope="col">Size</th>
                <th scope="col">Rarity</th>
                <th scope="col">Seasons</th>
                <th scope="col">Image</th>
                <th scope="col">Edit</th>
                <th scope="col">Remove</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"> 1
                    <!--<?=$assoc['id']?>-->
                </th>
                <td> Bob
                    <!--<?=$assoc['j_name']?>-->
                </td>
                <td>  Bob the Builder
                    <!--<?=$assoc['j_ssname']?>-->
                </td>
                <td> Blue
                    <!--<?=$assoc['c_name']?>-->
                </td>
                <td> Yes
                    <!--<?=$assoc['j_sting']?>-->
                </td>
                <td> 20
                    <!--<?=$assoc['j_size']?>-->
                </td>
                <td> Commen
                    <!--<?=$assoc['r_name']?>-->
                </td>
                <td> Summer
                    <!--<?=$assoc['s_name']?>-->
                </td>
                <td>
                    <img src="<?=base_url('MainIcon/SpotTheJellyfishAppIcon.png')?>" width="30" height="30" class="photo">
                    <!--<?=$img?>-->
                </td>
                <td> <a href="" class="text-dark"> Edit </a> </td>
                <!--edit-jellyfish.php?id=<?=$assoc['id']?>-->
                <td> <a href="" class="text-dark">Remove</a> </td>
                <!--delete-jellyfish.php?id=<?=$assoc['id']?>-->
            </tr>
        </tbody>
    </table>
</div>
