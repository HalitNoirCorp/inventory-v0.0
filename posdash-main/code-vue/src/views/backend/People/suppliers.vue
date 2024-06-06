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
                            <th>Company Name</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No.</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>GST No</th>
                            <th>Action</th>
                        </tr>
                        </template>
                         <template v-slot:body >
                            <tr v-for="(User,index) in UserListS" :key="index" >
                                <td>
                                    <div class="checkbox d-inline-block">
                                        <input type="checkbox" class="checkbox-input" id="checkbox2">
                                        <label for="checkbox2" class="mb-0"></label>
                                    </div>
                                </td>
                                <td>{{User.companyname}}</td>
                                <td>{{User.name}}</td>
                                <td>{{User.email}}</td>
                                <td>{{User.phoneno}}</td>
                                <td>{{User.city}}</td>
                                <td>{{User.country}}</td>  
                                <td>{{User.gstno}}</td>                   
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
    name:'Suppliers',
    data(){
        return{
             title:"Suppliers List",
            desc1:"Create and manage your vendor list, send and receive purchase orders – your online",
            desc2:"Dashboard is your new back of house.",
             link:{ name: 'people.addsuppliers'},
             linktext:"Add Supplier",
                UserListS:[
                {
                   companyname:'Fruits Supply',
                   name:'Max Conversion',
                   email:'max@gmail.com', 
                   phoneno:'0123456789',
                   city:'Petaling',
                   country:'USA',
                   gstno:'1234'
                },
                {
                   companyname:'Footwear Supply',
                   name:'Paige Turner',
                   email:'paige@gmail.com', 
                   phoneno:'0125856789',
                   city:'Orlando',
                   country:'USA',
                   gstno:'1235'
                },
                {
                   companyname:'Furniture Supply',
                   name:'Barb Ackue',
                   email:'barb@gmail.com', 
                   phoneno:'0123246789',
                   city:'Miami',
                   country:'USA',
                   gstno:'1236'
                },
                 {
                   companyname:'Food Supply',
                   name:'Ira Membrit',
                   email:'ira@gmail.com', 
                   phoneno:'0123458719',
                   city:'Francisco',
                   country:'UK',
                   gstno:'1237'
                },
                 {
                   companyname:'Grocery Supply',
                   name:'Pete Sariya',
                   email:'pete@gmail.com', 
                   phoneno:'0111456789',
                   city:'Petaling',
                   country:'USA',
                   gstno:'1238'
                },
                {
                   companyname:'Packing Supply',
                   name:'Rock lai',
                   email:'rock@gmail.com', 
                   phoneno:'0123452289',
                   city:'whopping',
                   country:'UK',
                   gstno:'1239'
                },
                
                 {
                   companyname:'Fish Supply',
                   name:'Terry Aki',
                   email:'terry@gmail.com', 
                   phoneno:'0123205789',
                   city:'Suzhou	',
                   country:'USA',
                   gstno:'1240'
                },
                 {
                   companyname:'Cloth Supply',
                   name:'Cliff Hanger',
                   email:'cliff@gmail.com', 
                   phoneno:'0189556789',
                   city:'Guilin',
                   country:'UK',
                   gstno:'1241'
                },
                 {
                   companyname:'Toy Supply',
                   name:'Alex john',
                   email:'alex@gmail.com', 
                   phoneno:'0123456123',
                   city:'Nanjing',
                   country:'USA',
                   gstno:'1242'
                },
               
                
            ]
        }
    }
}
</script>