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
                                <th>Supplier</th>
                                <th>Purchase Status</th>
                                <th>Total</th>
                                <th>Paid</th>
                                <th>Balance</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                        </template>
                         <template v-slot:body >
                            <tr v-for="(Purchase,index) in PurchaseLists" :key="index" >
                                <td>
                                    <div class="checkbox d-inline-block">
                                        <input type="checkbox" class="checkbox-input" id="checkbox2">
                                        <label for="checkbox2" class="mb-0"></label>
                                    </div>
                                </td>
                                <td>{{Purchase.date}}</td>
                                <td>{{Purchase.referenceno}}</td>
                                <td>{{Purchase.supplier}}</td>
                                <td><div class="badge badge-success">Received</div></td>
                                <td>{{Purchase.total}}</td>
                                <td>{{Purchase.paid}}</td>
                                <td>{{Purchase.balance}}</td>                            
                                <td><div class="badge badge-warning">Panding</div></td>
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
    name:'ListPurchases',
    data(){
        return{
             title:"Purchase List",
            desc1:"A purchase dashboard enables purchasing manager to efficiently track, evaluate,",
            desc2:"and optimize all acquisition processes within a company.",
             link:{  name: 'purchase.addpurchase'},
             linktext:"Add Purchase",
                PurchaseLists:[
                {
                   date:'01 jan 2020',
                   referenceno:'PO201',
                   supplier:'Fruits Supply', 
                   total:'50.1',
                   paid:'45.1',
                   balance:'5.00',
                },
                {
                   date:'05 jan 2021',
                   referenceno:'PO202',
                   supplier:'Footwear Supply', 
                   total:'40.5',
                   paid:'38.1',
                   balance:'2.00',
                },
                {
                   date:'06 jan 2021',
                   referenceno:'PO251',
                   supplier:'Furniture Supply', 
                   total:'80.1',
                   paid:'35.1',
                   balance:'45.00',
                },
                 {
                   date:'08 jan 2021',
                   referenceno:'PO261',
                   supplier:'Food Supply', 
                   total:'30.1',
                   paid:'15.1',
                   balance:'15.00',
                },
                 {
                   date:'09 jan 2021',
                   referenceno:'PO271',
                   supplier:'Grocery Supply', 
                   total:'20.1',
                   paid:'7.1',
                   balance:'13.00',
                },
                {
                   date:'10 jan 2021',
                   referenceno:'PO101',
                   supplier:'Packing Supply', 
                   total:'60.1',
                   paid:'40.1',
                   balance:'20.00',
                },
                 {
                   date:'12 jan 2021',
                   referenceno:'PO122',
                   supplier:'Fish Supply', 
                   total:'33.1',
                   paid:'13.1',
                   balance:'20.00',
                },
                 {
                   date:'12 jan 2021',
                   referenceno:'PO123',
                   supplier:'Cloth Supply', 
                   total:'10.1',
                   paid:'8.1',
                   balance:'2.00',
                },
                {
                   date:'13 jan 2021',
                   referenceno:'PO124',
                   supplier:'Toy Supply', 
                   total:'10.1',
                   paid:'5.1',
                   balance:'5.00',
                },
                
            ]
        }
    }
}
</script>