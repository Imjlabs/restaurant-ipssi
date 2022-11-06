<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
    <div class="wrapper wrapper--w780">
        <div class="card card-3">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Commande</h2>
                <form method="POST" action="order.php">
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Item Name" name="name">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="number" placeholder="Quantity" name="quantity">

                    </div>

                    <div class="input-group">
                        <input class="input--style-3" type="number" placeholder="Total Amount" name="amount">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Payment System" name="system">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Payment Number" name="number">
                    </div>
                    <div class="p-t-10">
                        <button class="btn btn--pill btn--green" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>