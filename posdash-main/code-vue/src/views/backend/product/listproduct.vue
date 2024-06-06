<template>
     <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <titlesectionList :title="title"  :desc1='desc1' :desc2="desc2" :link="link" :linktext="linktext" />
            </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                    <tableList>
                        <template v-slot:header >
                             <tr class="ligth ligth-data">
                            <th>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox1">
                                    <label for="checkbox1" class="mb-0"></label>
                                </div>
                            </th>
                            <th>Product</th>
                            <th>Code</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Brand Name</th>
                            <th>Cost</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                        </template>
                         <template v-slot:body >
                             <tr v-for="(ProductList,index) in ProductLists" :key="index">
                            <td>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox2">
                                    <label for="checkbox2" class="mb-0"></label>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img :src="ProductList.img" class="img-fluid rounded avatar-50 mr-3" alt="image">
                                    <div>
                                       {{ProductList.imgtitle}}
                                        <p class="mb-0"><small>This is test Product</small></p>
                                    </div>
                                </div>
                            </td>
                            <td>{{ProductList.code}}</td>
                            <td>{{ProductList.category}}</td>
                            <td>{{ProductList.price}}</td>
                            <td>{{ProductList.brandname}}</td>
                            <td>{{ProductList.cost}}</td>
                            <td>{{ProductList.Quantity}}</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" v-b-tooltip.top title="View"
                                        href="javascript:void(0)"><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" v-b-tooltip.top title="Edit"
                                        href="javascript:void(0)"><i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" v-b-tooltip.top title="Delete"
                                        href="javascript:void(0)"><i class="ri-delete-bin-line mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        </template>
                    </tableList>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</template>
<script>
export default {
    name:'listproduct',
  
    data(){
        return{
            title:"Product List",
            desc1:"The product list effectively dictates product presentation and provides space",
            desc2:"to list your products and offering in the most appealing way.",
             link:{ name: 'product.addproduct'},
             linktext:"Add Product",
            ProductLists:[
                {
                    img:require('@/assets/images/table/product/01.jpg'),
                    imgtitle:'Organic Cream',
                    code:'CREM01',
                    category:'Beauty',
                    price:'$25.00',
                    brandname:'Lakme',
                    cost:'$10.00',
                    Quantity:'10.0'
                },
                {
                    img:require('@/assets/images/table/product/02.jpg'),
                    imgtitle:'Rain Umbrella',
                    code:'UM01',
                    category:'Grocery',
                    price:'$30.00',
                    brandname:'Sun',
                    cost:'$20.00',
                    Quantity:'15.0'
                },
                {
                    img:require('@/assets/images/table/product/03.jpg'),
                    imgtitle:'Serum Bottle',
                    code:'SEM01',
                    category:'Beauty',
                    price:'$50.00',
                    brandname:'Blushing',
                    cost:'$25.00',
                    Quantity:'50.0'
                },
                 {
                    img:require('@/assets/images/table/product/04.jpg'),
                    imgtitle:'Coffee Beans',
                    code:'COF01',
                    category:'Food',
                    price:'$32.00',
                    brandname:'Nescafe',
                    cost:'$20.00',
                    Quantity:'50.0'
                },
                {
                    img:require('@/assets/images/table/product/05.jpg'),
                    imgtitle:'Book Shelves',
                    code:'FUN01',
                    category:'Furniture',
                    price:'$30.00',
                    brandname:'Vintage',
                    cost:'$30.00',
                    Quantity:'25.0'
                },
                 {
                    img:require('@/assets/images/table/product/06.jpg'),
                    imgtitle:'Dinner Set',
                    code:'DIS01',
                    category:'Grocery',
                    price:'$30.00',
                    brandname:'Rancher'+'s',
                    cost:'$20.00',
                    Quantity:'50.0'
                },
                {
                    img:require('@/assets/images/table/product/07.jpg'),
                    imgtitle:'Nike Shoes',
                    code:'NIS01',
                    category:'Shoes',
                    price:'$78.00',
                    brandname:'Nike',
                    cost:'$50.00',
                    Quantity:'100.0'
                },
                {
                    img:require('@/assets/images/table/product/08.jpg'),
                    imgtitle:'Computer Glasses',
                    code:'COG01',
                    category:'Frames',
                    price:'$25.00',
                    brandname:'Ray-Ban',
                    cost:'$20.00',
                    Quantity:'30.0'
                },
                 {
                    img:require('@/assets/images/table/product/09.jpg'),
                    imgtitle:'Alloy Jewel Set',
                    code:'AJS01',
                    category:'Jewellery',
                    price:'$150.00',
                    brandname:'Jazzin',
                    cost:'$50.00',
                    Quantity:'200.0'
                },
            ]

        }
    }
}
</script>

