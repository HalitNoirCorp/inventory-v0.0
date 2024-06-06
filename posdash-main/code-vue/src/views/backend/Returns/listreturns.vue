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
                                <th>Date</th>
                                <th>Reference No</th>
                                <th>Biller</th>
                                <th>Customer</th>
                                <th>Grand Total</th>
                                <th>Action</th>
                            </tr>
                        </template>
                         <template v-slot:body >
                            <tr v-for="(Returns,index) in ReturnsLists" :key="index" >
                                <td>
                                    <div class="checkbox d-inline-block">
                                        <input type="checkbox" class="checkbox-input" id="checkbox2">
                                        <label for="checkbox2" class="mb-0"></label>
                                    </div>
                                </td>
                                <td>{{Returns.date}}</td>
                                <td>{{Returns.referenceno}}</td>
                                <td>{{Returns.biller}}</td>
                                <td>{{Returns.customer}}</td>
                                <td>{{Returns.grandtotal}}</td>
                                                        
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
    name:'ListReturns',
    data(){
        return{
            title:"Returns List",
            desc1:"Returns dashboard shows the graphical representation of the channel and Reference",
            desc2:"wise returns with the comparison to the total units sold..",
             link:{ name: 'return.addreturn'},
             linktext:"Add Returns",
               ReturnsLists:[
                {
                   date:'28 feb 2021',
                   referenceno:'RETURN2021',
                   biller:'Test Biller', 
                   customer:'Paige Turner',
                   grandtotal:'16.5',
                },
                {
                   date:'23 feb 2021',
                   referenceno:'RETURN2006',
                   biller:'Test Biller', 
                   customer:'Bob Frapples',
                   grandtotal:'18.5',
                },
                {
                   date:'07 mar 2021',
                   referenceno:'RETURN2021',
                   biller:'Test Biller', 
                   customer:'Ira Membrit',
                   grandtotal:'18.5',
                },
                 {
                   date:'01 jan 2021',
                   referenceno:'RETURN2001',
                   biller:'Test Biller', 
                   customer:'Pete Sariya',
                   grandtotal:'20.5',
                },
                 {
                   date:'15 jan 2021',
                   referenceno:'RETURN2003',
                   biller:'Test Biller', 
                   customer:'Ira Membrit',
                   grandtotal:'20.5',
                },
                {
                   date:'01 mar 2021',
                   referenceno:'RETURN2007',
                   biller:'Test Biller', 
                   customer:'Anna Mull',
                   grandtotal:'20.5',
                },
                 {
                   date:'20 jan 2021',
                   referenceno:'RETURN2004',
                   biller:'Test Biller', 
                   customer:'Greta Life',
                   grandtotal:'23.0',
                },
                 {
                   date:'08 jan 2021',
                   referenceno:'RETURN2002',
                   biller:'Test Biller', 
                   customer:'Monty Carlo',
                   grandtotal:'25.5',
                },
                {
                   date:'23 jan 2021',
                   referenceno:'RETURN2005',
                   biller:'Test Biller', 
                   customer:'Barb Ackue',
                   grandtotal:'30.0',
                },
                
            ]
        }
    }
}
</script>