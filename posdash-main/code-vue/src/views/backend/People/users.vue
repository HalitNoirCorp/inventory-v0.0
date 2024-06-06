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
								<th>Name</th>
								<th>Email</th>
								<th>Company</th>
								<th>Awors Points</th>
								<th>Group</th>
								<th>Status</th>
								<th>Store</th>
								<th>Action</th>
							</tr>
						</template>
						<template v-slot:body>
							<tr v-for="(User,index) in UserListS" :key="index">
								<td>
									<div class="checkbox d-inline-block">
										<input type="checkbox" class="checkbox-input" id="checkbox2">
										<label for="checkbox2" class="mb-0"></label>
									</div>
								</td>
								<td>{{User.name}}</td>
								<td>{{User.email}}</td>
								<td>{{User.company}}</td>
								<td>0</td>
								<td>{{User.group}}</td>
								<td>{{User.status}}</td>
								<td>{{User.store}}</td>
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
    name:'Users',
    data(){
        return{
             title:"User List",
            desc1:"A dashboard provides you an overview of user list with access to the most important data,",
            desc2:"functions and controls.",
             link:{   name: 'people.addusers'},
             linktext:"Add User",
              UserListS:[
                {
                   name:'Cliff Hanger',
                   email:'cliff@gmail.com',
                   company:'Product Manager', 
                   group:'Cliff',
                   status:'Active',
                   store:'1'
                },
                {
                   name:'Terry Aki',
                   email:'terry@gmail.com',
                   company:'Stock CEO', 
                   group:'Terry',
                   status:'Active',
                   store:'2'
                },
                {
                   name:'Ira Membrit',
                   email:'ira@gmail.com',
                   company:'Stock Manager', 
                   group:'Ira',
                   status:'Active',
                   store:'3'
                },
                 {
                   name:'Barb Ackue',
                   email:'barb@gmail.com',
                   company:'Stock Developer	', 
                   group:'Barb',
                   status:'Active',
                   store:'1'
                },
                 {
                   name:'Max Conversion',
                   email:'max@gmail.com',
                   company:'Stock Manager', 
                   group:'Max',
                   status:'Active',
                   store:'1'
                },
                {
                   name:'Alex john',
                   email:'alex@gmail.com',
                   company:'Product Manager', 
                   group:'Alex',
                   status:'Active',
                   store:'2'
                },
                
                 {
                   name:'Paige Turner',
                   email:'paige@gmail.com',
                   company:'Stock Developer', 
                   group:'Paige',
                   status:'Active',
                   store:'2'

                },
                 {
                   name:'Greta Life',
                   email:'greta@gmail.com',
                   company:'Product Manager', 
                   group:'Greta',
                   status:'Active',
                   store:'4'
                },
                 {
                   name:'Anna Mull',
                   email:'anna@gmail.com',
                   company:'Stock Manager', 
                   group:'Anna',
                   status:'Active',
                   store:'1'
                },
               
                
            ]
        }
    }
}
</script>