
<style>
    .product-page{
    }
    .price{
        font-size: 0.8rem;
    }
    h5 {
        color : #a00304;
    }

    .btn-buy {
        background-color:#a00304;
        border-color:#a00304;font-size: 14px;
        border-radius:0;
    }

    .btn-rent {
        border-color:#a00304;font-size: 14px;
        background-color:#fff;
        color:#a00304;
        border-radius:0;
    }

    .btn-rent:hover {
        border-color:#a00304;
        font-size: 14px;
        background-color:#a00304;
        color:#fff;
        border-radius:0;
    }
</style>
<div class="product-page">
    <div class="container" > 
        <div class="row no-gutters" style="margin-top:18px; margin-bottom:18px">
            <div class="col-sm-12">
                <h5 style='font-weight:bolder'>Calliope Dress</h5>
            </div>
            <div class="col">
                <div class="price">
                    Buy :<br>
                    Rp. 1.000.000
                </div>    
            </div>
            <div class="col">
                <div class="price">Rent : <br>
                    Rp.30.000/days
                </div>    
            </div>
       
        </div>
        <!-- image  -->
        <div class="row no-gutters">
            <div class="col-md-12" >
                <img class='' style="width:100%"  alt="Responsive image"  src="https://www.aakar-studios.com/wp-content/uploads/2020/06/DRE061118PEG.jpg">
            </div>
        </div>

        <!-- description -->
        <div class="row">
            <div class="col-12">
            <div class="accordion" id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Products Detail
                    </button>
                </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <div class="box" style="box-sizing: border-box;">
                        Color : Black
                        <br><br>
                        Size : Small (S)
                        <br><br>
                        Inner Included : No
                        <br><br>
                        Type : Dress
                        <br><br>
                        Brand/Designer : Peggy Hartanto
                    </div>
                </div>
                </div>
            </div>
            </div>
            </div>
        </div>


    </div>
            
</div>


<nav class="navbar navbar-expand-lg  navbar-light bg-light  fixed-bottom" >
    <div class="row w-100 no-gutters">
        <div class="col-8">
            <a href="#" type="button" class="btn btn-primary btn-lg btn-block btn-rent" >Rent</a>
        </div>
        <div class="col-4">
            <a  href="#" class="btn btn-lg btn-block "><i class="far fa-heart"></i></a>
        </div>
        <div class="col-12">
            <a href="#" type="button" class="btn btn-primary btn-lg btn-block btn-buy" >Buy</a>
        </div>
        
    </div>
</nav>
