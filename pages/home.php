<div class="row">

    <div class="card col">
        <img style="height: 50%;" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F47%2F2021%2F01%2F04%2Ffrisco-cable-knit-dog-hat.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $products[0]->getName() ?></h5>
            <p class="card-text"><?= $products[0]->getdescription() ?></p>
            <p class="card-text"><?= $products[0]->getPrice() ?> €</p>
            <a href="" class="btn btn-primary">voir</a>
        </div>
    </div>

    <div class="card col">
        <img style="height: 50%;" src="https://thumbs.dreamstime.com/z/cabbage-hat-14340916.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $products[1]->getName() ?></h5>
            <p class="card-text"><?= $products[1]->getdescription() ?></p>
            <p class="card-text"><?= $products[1]->getPrice() ?> €</p>
            <a href="" class="btn btn-primary">voir</a>
        </div>
    </div>

    <div class="card col">
        <img style="height: 50%;" src="https://i.ebayimg.com/images/g/xjkAAOSwPw5deLXJ/s-l300.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $products[2]->getName() ?></h5>
            <p class="card-text"><?= $products[2]->getdescription() ?></p>
            <p class="card-text"><?= $products[2]->getPrice() ?> €</p>
            <a href="" class="btn btn-primary">voir</a>
        </div>
    </div>

</div>

<div class="text-center">
    <a class="btn btn-primary" href="index?page=list">Voir tout le catalogue</a>
</div>