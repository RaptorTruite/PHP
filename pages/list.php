<div class="container">

    <div class="row justify-content-center mt-4">
        <form action="" method="post">

            <label for="size">Selectionnez une taille</label>
            <select name="size" id="size">
                <option value="">Toutes les tailles</option>
                <?php
                foreach (Beanie::SIZES as $size) {
                    $selected = '';
                    if (!empty($_POST["size"]) && $_POST["size"] === $size) {
                        $selected = 'selected';
                    }
                    echo "<option value=\"$size\" $selected>$size</option>";
                }
                ?>
            </select>

            <label for="material">Selectionnez une taille</label>
            <select name="material" id="material">
                <option value="">Toutes les matières</option>
                <?php
                foreach (Beanie::MATERIALS as $material) {
                    $selected = '';
                    if (!empty($_POST["material"]) && $_POST["material"] === $material) {
                        $selected = 'selected';
                    }
                    echo '<option value="' . $material . '"' . $selected . '>' . $material . '</option>';
                }
                ?>
            </select>

            <input type="submit" value="Filtrer">

        </form>
    </div>

    <div class="row justify-content-center">

        <?php
        $filterSize = "";
        $filterMaterial = "";

        if (!empty($_POST["size"]) || !empty($_POST["material"])) {
            if (!empty($_POST["size"])) {
                $filterSize = $_POST["size"];
            }

            if (!empty($_POST["material"])) {
                $filterMaterial = $_POST["material"];
            }
        }

        foreach ($products as $bonnet) {
            if (empty($filterSize) && empty($filterMaterial)) {
                showItem($bonnet);
            }

            if (!empty($filterSize) && !empty($filterMaterial)) {
                if (in_array($filterSize, $bonnet->getSizes()) && in_array($filterMaterial, $bonnet->getMaterials())) {
                    showItem($bonnet);
                }
            }

            if (!empty($filterSize)) {
                if (in_array($filterSize, $bonnet->getSizes())) {
                    showItem($bonnet);
                }
            }

            if (!empty($filterMaterial)) {
                if (in_array($filterMaterial, $bonnet->getMaterials())) {
                    showItem($bonnet);
                }
            }
        }
        ?>
    </div>

</div>