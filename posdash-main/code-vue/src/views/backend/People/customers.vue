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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No.</th>
                            <th>Country</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Last Order</th>
                            <th>Action</th>
                        </tr>
                        </template>
                         <template v-slot:body >
                            <tr v-for="(customer,index) in CustomerLists" :key="index" >
                                <td>
                                    <div class="checkbox d-inline-block">
                                        <input type="checkbox" class="checkbox-input" id="checkbox2">
                                        <label for="checkbox2" class="mb-0"></label>
                                    </div>
                                </td>
                                <td>{{customer.name}}</td>
                                <td>{{customer.email}}</td>
                                <td>{{customer.phoneno}}</td>
                                <td>{{customer.country}}</td>
                                <td>{{customer.order}}</td>
                                <td><div class="badge badge-warning">Pending</div></td>
                                 <td>{{customer.lastorder}}</td>                     
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
    name:'Customers',
    data(){
        return{
            title:"Customer List",
            desc1:"A customer dashboard lets you easily gather and visualize customer data from optimizing",
            desc2:"the customer experience, ensuring customer retention.",
             link:{  name: 'people.addcustomers'},
             linktext:"Add Customer",
              CustomerLists:[
                {
                   name:'Max Conversion',
                   email:'max@gmail.com',
                   phoneno:'0123456789', 
                   country:'USA',
                   order:'2',
                   lastorder:'1'
                },
                {
                   name:'Alex john',
                   email:'alex@gmail.com',
                   phoneno:'0123456123', 
                   country:'USA',
                   order:'3',
                   lastorder:'2'
                },
                {
                   name:'Cliff Hanger',
                   email:'cliff@gmail.com',
                   phoneno:'0189556789', 
                   country:'UK',
                   order:'3',
                   lastorder:'3'
                },
                 {
                   name:'Terry Aki',
                   email:'terry@gmail.com',
                   phoneno:'0123205789', 
                   country:'USA',
                   order:'2',
                   lastorder:'2'
                },
                 {
                   name:'Rock lai',
                   email:'rock@gmail.com',
                   phoneno:'0123452289', 
                   country:'UK',
                   order:'3',
                   lastorder:'1'
                },
                {
                   name:'Pete Sariya',
                   email:'pete@gmail.com',
                   phoneno:'0111456789', 
                   country:'USA',
                   order:'5',
                   lastorder:'4'
                },
                 {
                   name:'Ira Membrit',
                   email:'ira@gmail.com',
                   phoneno:'0123458719', 
                   country:'UK',
                   order:'4',
                   lastorder:'2'
                },
                 {
                   name:'Barb Ackue',
                   email:'barb@gmail.com',
                   phoneno:'0123246789', 
                   country:'USA',
                   order:'2',
                   lastorder:'2'

                },
                 {
                   name:'Paige Turner',
                   email:'paige@gmail.com',
                   phoneno:'0125856789', 
                   country:'UK',
                   order:'9',
                   lastorder:'7'
                },
               
                
            ]
        }
    }
}
</script>