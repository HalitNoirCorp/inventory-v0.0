<template>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<titlesectionList :title="title" :desc1='desc1' :desc2="desc2" :link="link" :linktext="linktext" /> </div>
			<div class="col-lg-12">
				<div class="table-responsive rounded mb-3">
					<tableList>
						<template v-slot:header>
							<tr class="ligth ligth-data">
								<th>
									<div class="checkbox d-inline-block">
										<input type="checkbox" class="checkbox-input" id="checkbox1">
										<label for="checkbox1" class="mb-0"></label>
									</div>
								</th>
								<th>Image</th>
								<th>Code</th>
								<th>Category</th>
								<th>Action</th>
							</tr>
						</template>
						<template v-slot:body>
							<tr v-for="(Category,index) in Categorys" :key="index">
								<td>
									<div class="checkbox d-inline-block">
										<input type="checkbox" class="checkbox-input" id="checkbox2">
										<label for="checkbox2" class="mb-0"></label>
									</div>
								</td>
								<td>
									<div class="d-flex align-items-center"> <img :src="Category.img" class="img-fluid rounded avatar-50 mr-3" alt="image">
										<div> {{Category.imgtitle}}
											<p class="mb-0"><small>This is test Product</small></p>
										</div>
									</div>
								</td>
								<td>{{Category.code}}</td>
								<td>{{Category.category}}</td>
								<td>
									<div class="d-flex align-items-center list-action"> <a class="badge badge-info mr-2" data-toggle="tooltip" v-b-tooltip.top title="View" href="javascript:void(0)"><i class="ri-eye-line mr-0"></i></a> <a class="badge bg-success mr-2" data-toggle="tooltip" v-b-tooltip.top title="Edit" href="javascript:void(0)"><i class="ri-pencil-line mr-0"></i></a> <a class="badge bg-warning mr-2" data-toggle="tooltip" v-b-tooltip.top title="Delete" href="javascript:void(0)"><i class="ri-delete-bin-line mr-0"></i></a> </div>
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
    name:'ListCategory',
    data(){
        return{
             title:"Category List",
            desc1:"Use category list as to describe your overall core business from the provided list.",
            desc2:"Click the name of the category where you want to add a list item. .",
             link:{ name: 'category.addcategory'},
             linktext:"Add Category",
               Categorys:[
                {
                    img:require('@/assets/images/table/product/01.jpg'),
                    imgtitle:'Organic Cream',
                    code:'CREM01',
                    category:'Beauty',  
                },
                {
                    img:require('@/assets/images/table/product/02.jpg'),
                    imgtitle:'Rain Umbrella',
                    code:'UM01',
                    category:'Grocery',
                },
                {
                    img:require('@/assets/images/table/product/03.jpg'),
                    imgtitle:'Serum Bottle',
                    code:'SEM01',
                    category:'Beauty',
                   
                },
                 {
                    img:require('@/assets/images/table/product/04.jpg'),
                    imgtitle:'Coffee Beans',
                    code:'COF01',
                    category:'Food', 
                },
                {
                    img:require('@/assets/images/table/product/05.jpg'),
                    imgtitle:'Book Shelves',
                    code:'FUN01',
                    category:'Furniture',   
                },
                 {
                    img:require('@/assets/images/table/product/06.jpg'),
                    imgtitle:'Dinner Set',
                    code:'DIS01',
                    category:'Grocery',
                },
                {
                    img:require('@/assets/images/table/product/07.jpg'),
                    imgtitle:'Nike Shoes',
                    code:'NIS01',
                    category:'Shoes',
                },
                {
                    img:require('@/assets/images/table/product/08.jpg'),
                    imgtitle:'Computer Glasses',
                    code:'COG01',
                    category:'Frames',
                },
                 {
                    img:require('@/assets/images/table/product/09.jpg'),
                    imgtitle:'Alloy Jewel Set',
                    code:'AJS01',
                    category:'Jewellery',
                },
            ]

        }
        
    }
}
</script>