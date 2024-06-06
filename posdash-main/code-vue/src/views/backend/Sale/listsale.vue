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
								<th>Date</th>
								<th>Customer</th>
								<th>Total</th>
								<th>Paid</th>
								<th>Status</th>
								<th>Biller</th>
								<th>Tax</th>
								<th>Action</th>
							</tr>
						</template>
						<template v-slot:body>
							<tr v-for="(Sale,index) in Sales" :key="index">
								<td>
									<div class="checkbox d-inline-block">
										<input type="checkbox" class="checkbox-input" id="checkbox2">
										<label for="checkbox2" class="mb-0"></label>
									</div>
								</td>
								<td>{{Sale.date}}</td>
								<td>{{Sale.customer}}</td>
								<td>{{Sale.total}}</td>
								<td>{{Sale.paid}}</td>
								<td>
									<div class="badge badge-success">{{Sale.Status}}</div>
								</td>
								<td>{{Sale.biller}}</td>
								<td>{{Sale.tax}}</td>
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
    name:'ListSale',
    data(){
        return{
            title:"Sale List",
            desc1:"Sales enables you to effectively control sales KPIs and monitor them in one central",
            desc2:"place while helping teams to reach sales goals.",
             link:{ name: 'sale.addsale'},
             linktext:"Add Sale",
             Sales:[
                {
                   date:'01 jan 2020',
                   customer:'Bill Yerds',
                   total:'38.50',
                   paid:'38.50',
                   Status:'Paid',
                   biller:'Yerds',
                   tax:'1.3',
                },
                {
                   date:'03 jan 2020',
                   customer:'Anna Sthesia',
                   total:'40.50',
                   paid:'40.50',
                   Status:'Paid',
                   biller:'Sthesia',
                   tax:'1.4',
                },
                 {
                   date:'05 jan 2020',
                   customer:'Paul Molive',
                   total:'50.00',
                   paid:'50.00',
                   Status:'Paid',
                   biller:'Molive',
                   tax:'1.5',
                },
                {
                   date:'05 Mar 2020',
                   customer:'Pete Sariya',
                   total:'52.48',
                   paid:'52.48',
                   Status:'Paid',
                   biller:'Sariya',
                   tax:'1.2',
                },
                {
                   date:'09 Feb 2020',
                   customer:'Bob Frapples',
                   total:'48.50',
                   paid:'48.50',
                   Status:'Paid',
                   biller:'Frapples',
                   tax:'1.4',
                },
                 {
                   date:'15 jan 2020',
                   customer:'Anna Mull',
                   total:'85.50',
                   paid:'85.50',
                   Status:'Paid',
                   biller:'Anna',
                   tax:'1.8',
                },
                {
                   date:'24 jan 2020',
                   customer:'Paige Turner',
                   total:'38.50',
                   paid:'38.50',
                   Status:'Paid',
                   biller:'Turner',
                   tax:'1.9',
                },
                 {
                   date:'25 feb 2020',
                   customer:'Barb Ackue',
                   total:'58.50',
                   paid:'55.50',
                   Status:'Paid',
                   biller:'Ackue',
                   tax:'1.6',
                },
                {
                   date:'28 feb 2020',
                   customer:'Greta Life',
                   total:'60.45',
                   paid:'60.45',
                   Status:'Paid',
                   biller:'Yerds',
                   tax:'1.8',
                },
                
            ]
        }
    }
}
</script>