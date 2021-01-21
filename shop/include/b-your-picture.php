<div class="b-your-picture">
    <div class="container">
        <form action="">

            <div class="user">
                <div class="name">
                    <label for="name"> Name </label>
                    <input type="text" id="name" maxlength="255">
                </div> <!-- /.name -->

                <div class="city">
                    <label for="city"> City </label>
                    <input type="text" id="city" maxlength="255">
                </div> <!-- /.city -->
            </div> <!-- /.user -->


            <div class="border p-3 mb-3" id="products-own-picture">
                <div class="border bg-dark p-3 mb-3 product-own-picture">

                    <div class="product-selection">
                        <label> Example select </label>
                        <select>
                            <option selected disabled>Выбрать</option>
                            <option> 1 </option>
                            <option> 2 </option>
                            <option> 3 </option>
                            <option> 4 </option>
                            <option> 5 </option>
                        </select>
                    </div> <!-- /.product-selection -->

                    <div class="your-picture">

                        <div class="image">
                            <input class="upload" type='file' />
                            <img class="upload-img" src="#" alt="image" />
                        </div> <!-- /.image -->

                        <div class="image-parameters">
                            <label> Example select </label>
                            <select>
                                <option selected disabled>Выбрать</option>
                                <option> 1 </option>
                                <option> 2 </option>
                                <option> 3 </option>
                                <option> 4 </option>
                                <option> 5 </option>
                            </select>
                        </div> <!-- /.image-parameters -->

                    </div> <!-- /.your-picture -->

                </div> <!-- /.product-own-picture -->
            </div><!-- /#products-own-picture -->

            <button class="btn btn-primary" id="add-product">
                Дублировать последний элемент
            </button> <!-- /#add-product -->

        </form>
    </div> <!-- /.container -->
</div> <!-- /.b-your-picture -->