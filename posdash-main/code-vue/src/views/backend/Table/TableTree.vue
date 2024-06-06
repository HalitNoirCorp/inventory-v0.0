<template>
     <b-container fluid>
         <b-row>
            <b-col lg="6">
               <card class="card-block card-stretch card-height">
                  <template v-slot:headerTitle>
                        <h4 class="card-title">Avatar Sizing</h4>
                     </template>
                     <template v-slot:headerAction>
                       <a class="text-primary float-right" v-b-toggle.collapse-1 role="button">
                         <i class="ri-code-s-slash-line" />
                       </a>
                     </template>
                  <template v-slot:body>
                     <b-collapse id="collapse-1" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;table id=&quot;tree-table-1&quot; class=&quot;table table-bordered iq-bg-white tree&quot;&gt;
&lt;thead class=&quot;bg-white&quot;&gt;
   &lt;tr&gt;
      &lt;th&gt;Demo 1&lt;/th&gt;
   &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
   &lt;tr data-id=&quot;1&quot; data-parent=&quot;0&quot; data-level=&quot;1&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 1&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;2&quot; data-parent=&quot;1&quot; data-level=&quot;2&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 1.1&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;3&quot; data-parent=&quot;2&quot; data-level=&quot;3&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 1.2&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;4&quot; data-parent=&quot;3&quot; data-level=&quot;4&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 1.3&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;6&quot; data-parent=&quot;0&quot; data-level=&quot;1&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 2&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;7&quot; data-parent=&quot;6&quot; data-level=&quot;2&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 2.1&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;8&quot; data-parent=&quot;7&quot; data-level=&quot;3&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 2.2&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;9&quot; data-parent=&quot;8&quot; data-level=&quot;4&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 2.3&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;10&quot; data-parent=&quot;0&quot; data-level=&quot;1&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 3&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;11&quot; data-parent=&quot;10&quot; data-level=&quot;2&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 3.1&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;12&quot; data-parent=&quot;11&quot; data-level=&quot;3&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 3.2&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;13&quot; data-parent=&quot;12&quot; data-level=&quot;4&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 3.3&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;14&quot; data-parent=&quot;0&quot; data-level=&quot;1&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 4&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;15&quot; data-parent=&quot;14&quot; data-level=&quot;2&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 4.1&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;16&quot; data-parent=&quot;15&quot; data-level=&quot;3&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 4.2&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;17&quot; data-parent=&quot;16&quot; data-level=&quot;4&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 4.3&lt;/td&gt;
   &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
                     <div class="table-responsive">
                        <table id="tree-table" class="table table-bordered iq-bg-white tree">
                           <thead class="bg-white">
                              <tr>
                                 <th>Demo 1</th>
                              </tr>
                           </thead>
                           <TreeView
                              :isOpened="true"
                              :item="treeData"
                           />
                           <!-- <tbody>
                              <template v-for="(table,index) in tables">
                              <tr :key="index">
                                 <td v-b-toggle="table.id">
                                    <span class="treegrid-indent" style="width:15px">
                                    </span>
                                    <span class="treegrid-expander glyphicon glyphicon-chevron-right"></span>
                                    {{table.title}}</td>
                              </tr>
                              <b-collapse class="w-100" :key="`${'child-index' + index + childIndex}`" :id="table.id"    v-for="(tableChild, childIndex) in  table.tableContain  " >
                                 <tr style="padding:100px">          
                                  <td v-b-toggle.child1 class="glyphicon-chevron-down">
                                    <span class="treegrid-indent" style="width:30px">
                                    </span>
                                    <span class="treegrid-expander glyphicon glyphicon-chevron-right"></span>
                                    {{tableChild.title}}
                                 </td>
                                 </tr>
                                 <b-collapse class="w-100"  id="child1"    v-for="(tableChild1, childIndex1) in  tableChild.tableContain  " :key="`${'child-index' + index + childIndex + childIndex1}`" >
                                 <tr>
                                 <td v-b-toggle.child2 class="glyphicon-chevron-down">
                                    <span class="treegrid-indent" style="width:45px">
                                    </span>
                                    <span class="treegrid-expander glyphicon glyphicon-chevron-right"></span>
                                    {{tableChild1.title}}
                                 </td>
                                 </tr>
                                 <b-collapse  class="w-100"  id="child2"    v-for="(tableChild2, childIndex1) in  tableChild1.tableContain  " :key="`${'child-index' + index + childIndex + childIndex1}`" >
                                 <tr>
                                 <td class="glyphicon-chevron-down">
                                    <span class="treegrid-indent" style="width:60px">
                                    </span>
                                    {{tableChild2.title}}
                                 </td>
                                 </tr>
                              </b-collapse>
                              </b-collapse>
                              </b-collapse>
                              
                              </template>
                           </tbody> -->
                           <!-- <thead class="bg-white">
                              <tr>
                                 <th>Demo 1</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr data-id="1" data-parent="0" data-level="1">
                                 <td data-column="name">Data 1</td>
                              </tr>
                              <tr data-id="2" data-parent="1" data-level="2">
                                 <td data-column="name">Data 1.1</td>
                              </tr>
                              <tr data-id="3" data-parent="2" data-level="3">
                                 <td data-column="name">Data 1.2</td>
                              </tr>
                              <tr data-id="4" data-parent="3" data-level="4">
                                 <td data-column="name">Data 1.3</td>
                              </tr>
                              <tr data-id="6" data-parent="0" data-level="1">
                                 <td data-column="name">Data 2</td>
                              </tr>
                              <tr data-id="7" data-parent="6" data-level="2">
                                 <td data-column="name">Data 2.1</td>
                              </tr>
                              <tr data-id="8" data-parent="7" data-level="3">
                                 <td data-column="name">Data 2.2</td>
                              </tr>
                              <tr data-id="9" data-parent="8" data-level="4">
                                 <td data-column="name">Data 2.3</td>
                              </tr>
                              <tr data-id="10" data-parent="0" data-level="1">
                                 <td data-column="name">Data 3</td>
                              </tr>
                              <tr data-id="11" data-parent="10" data-level="2">
                                 <td data-column="name">Data 3.1</td>
                              </tr>
                              <tr data-id="12" data-parent="11" data-level="3">
                                 <td data-column="name">Data 3.2</td>
                              </tr>
                              <tr data-id="13" data-parent="12" data-level="4">
                                 <td data-column="name">Data 3.3</td>
                              </tr>
                              <tr data-id="14" data-parent="0" data-level="1">
                                 <td data-column="name">Data 4</td>
                              </tr>
                              <tr data-id="15" data-parent="14" data-level="2">
                                 <td data-column="name">Data 4.1</td>
                              </tr>
                              <tr data-id="16" data-parent="15" data-level="3">
                                 <td data-column="name">Data 4.2</td>
                              </tr>
                              <tr data-id="17" data-parent="16" data-level="4">
                                 <td data-column="name">Data 4.3</td>
                              </tr>
                           </tbody> -->
                        </table>
                     </div>
                  </template>
               </card>
            </b-col>
            <b-col lg="6">
               <card class="card-block card-stretch card-height">
                  <template v-slot:headerTitle>
                        <h4 class="card-title">Table Treeview</h4>
                     </template>
                  <template v-slot:headerAction>
                       <a class="text-primary float-right" v-b-toggle.collapse-2 role="button">
                         <i class="ri-code-s-slash-line" />
                       </a>
                     </template>
                  <template v-slot:body>
                     <b-collapse id="collapse-2" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;table id=&quot;tree-table-2&quot; class=&quot;table table-bordered iq-bg-dark  tree&quot;&gt;
&lt;thead class=&quot;bg-dark&quot;&gt;
   &lt;tr&gt;
      &lt;th&gt;Demo 2&lt;/th&gt;
   &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
   &lt;tr data-id=&quot;1&quot; data-parent=&quot;0&quot; data-level=&quot;1&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 1&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;2&quot; data-parent=&quot;1&quot; data-level=&quot;2&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 1.1&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;3&quot; data-parent=&quot;2&quot; data-level=&quot;3&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 1.2&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;4&quot; data-parent=&quot;3&quot; data-level=&quot;4&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 1.3&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;6&quot; data-parent=&quot;0&quot; data-level=&quot;1&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 2&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;7&quot; data-parent=&quot;6&quot; data-level=&quot;2&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 2.1&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;8&quot; data-parent=&quot;7&quot; data-level=&quot;3&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 2.2&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;9&quot; data-parent=&quot;8&quot; data-level=&quot;4&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 2.3&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;10&quot; data-parent=&quot;0&quot; data-level=&quot;1&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 3&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;11&quot; data-parent=&quot;10&quot; data-level=&quot;2&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 3.1&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;12&quot; data-parent=&quot;11&quot; data-level=&quot;3&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 3.2&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;13&quot; data-parent=&quot;12&quot; data-level=&quot;4&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 3.3&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;14&quot; data-parent=&quot;0&quot; data-level=&quot;1&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 4&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;15&quot; data-parent=&quot;14&quot; data-level=&quot;2&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 4.1&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;16&quot; data-parent=&quot;15&quot; data-level=&quot;3&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 4.2&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;17&quot; data-parent=&quot;16&quot; data-level=&quot;4&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 4.3&lt;/td&gt;
   &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
</code></pre>
                </kbd>
              </div>
                     </b-collapse>
                     <div class="table-responsive">
                        <table id="tree-table-2" class="table table-bordered iq-bg-dark  tree">
                           <thead class="bg-dark">
                              <tr>
                                 <th>Demo 2</th>
                              </tr>
                           </thead>
                           <!-- <tbody> -->
                           <TreeView
                              :isOpened="true"
                              :item="treeData"
                           >
                           </TreeView>
                           <!-- </tbody> -->
                           <!-- <tbody>
                              <tr data-id="1" data-parent="0" data-level="1">
                                 <td data-column="name">Data 1</td>
                              </tr>
                              <tr data-id="2" data-parent="1" data-level="2">
                                 <td data-column="name">Data 1.1</td>
                              </tr>
                              <tr data-id="3" data-parent="2" data-level="3">
                                 <td data-column="name">Data 1.2</td>
                              </tr>
                              <tr data-id="4" data-parent="3" data-level="4">
                                 <td data-column="name">Data 1.3</td>
                              </tr>
                              <tr data-id="6" data-parent="0" data-level="1">
                                 <td data-column="name">Data 2</td>
                              </tr>
                              <tr data-id="7" data-parent="6" data-level="2">
                                 <td data-column="name">Data 2.1</td>
                              </tr>
                              <tr data-id="8" data-parent="7" data-level="3">
                                 <td data-column="name">Data 2.2</td>
                              </tr>
                              <tr data-id="9" data-parent="8" data-level="4">
                                 <td data-column="name">Data 2.3</td>
                              </tr>
                              <tr data-id="10" data-parent="0" data-level="1">
                                 <td data-column="name">Data 3</td>
                              </tr>
                              <tr data-id="11" data-parent="10" data-level="2">
                                 <td data-column="name">Data 3.1</td>
                              </tr>
                              <tr data-id="12" data-parent="11" data-level="3">
                                 <td data-column="name">Data 3.2</td>
                              </tr>
                              <tr data-id="13" data-parent="12" data-level="4">
                                 <td data-column="name">Data 3.3</td>
                              </tr>
                              <tr data-id="14" data-parent="0" data-level="1">
                                 <td data-column="name">Data 4</td>
                              </tr>
                              <tr data-id="15" data-parent="14" data-level="2">
                                 <td data-column="name">Data 4.1</td>
                              </tr>
                              <tr data-id="16" data-parent="15" data-level="3">
                                 <td data-column="name">Data 4.2</td>
                              </tr>
                              <tr data-id="17" data-parent="16" data-level="4">
                                 <td data-column="name">Data 4.3</td>
                              </tr>
                           </tbody> -->
                        </table>
                     </div>
                  </template>
               </card>
            </b-col>
            <b-col lg="6">
               <card class="card-block card-stretch card-height">
                  <template v-slot:headerTitle>
                        <h4 class="card-title">Tree view</h4>
                     </template>
                  <template v-slot:headerAction>
                       <a class="text-primary float-right" v-b-toggle.collapse-3 role="button">
                         <i class="ri-code-s-slash-line" />
                       </a>
                     </template>
                  <template v-slot:body>
                     <b-collapse id="collapse-3" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;table id=&quot;tree-table-3&quot; class=&quot;table table-bordered iq-bg-primary  tree&quot;&gt;
   &lt;thead class=&quot;bg-primary&quot;&gt;
      &lt;tr&gt;
         &lt;th&gt;Demo 3&lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   &lt;tbody&gt;
      &lt;tr data-id=&quot;1&quot; data-parent=&quot;0&quot; data-level=&quot;1&quot;&gt;
         &lt;td data-column=&quot;name&quot;&gt;Data 1&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr data-id=&quot;2&quot; data-parent=&quot;1&quot; data-level=&quot;2&quot;&gt;
         &lt;td data-column=&quot;name&quot;&gt;Data 1.1&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr data-id=&quot;3&quot; data-parent=&quot;2&quot; data-level=&quot;3&quot;&gt;
         &lt;td data-column=&quot;name&quot;&gt;Data 1.2&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr data-id=&quot;4&quot; data-parent=&quot;3&quot; data-level=&quot;4&quot;&gt;
         &lt;td data-column=&quot;name&quot;&gt;Data 1.3&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr data-id=&quot;6&quot; data-parent=&quot;0&quot; data-level=&quot;1&quot;&gt;
         &lt;td data-column=&quot;name&quot;&gt;Data 2&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr data-id=&quot;7&quot; data-parent=&quot;6&quot; data-level=&quot;2&quot;&gt;
         &lt;td data-column=&quot;name&quot;&gt;Data 2.1&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr data-id=&quot;8&quot; data-parent=&quot;7&quot; data-level=&quot;3&quot;&gt;
         &lt;td data-column=&quot;name&quot;&gt;Data 2.2&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr data-id=&quot;9&quot; data-parent=&quot;8&quot; data-level=&quot;4&quot;&gt;
         &lt;td data-column=&quot;name&quot;&gt;Data 2.3&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr data-id=&quot;10&quot; data-parent=&quot;0&quot; data-level=&quot;1&quot;&gt;
         &lt;td data-column=&quot;name&quot;&gt;Data 3&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr data-id=&quot;11&quot; data-parent=&quot;10&quot; data-level=&quot;2&quot;&gt;
         &lt;td data-column=&quot;name&quot;&gt;Data 3.1&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr data-id=&quot;12&quot; data-parent=&quot;11&quot; data-level=&quot;3&quot;&gt;
         &lt;td data-column=&quot;name&quot;&gt;Data 3.2&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr data-id=&quot;13&quot; data-parent=&quot;12&quot; data-level=&quot;4&quot;&gt;
         &lt;td data-column=&quot;name&quot;&gt;Data 3.3&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr data-id=&quot;14&quot; data-parent=&quot;0&quot; data-level=&quot;1&quot;&gt;
         &lt;td data-column=&quot;name&quot;&gt;Data 4&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr data-id=&quot;15&quot; data-parent=&quot;14&quot; data-level=&quot;2&quot;&gt;
         &lt;td data-column=&quot;name&quot;&gt;Data 4.1&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr data-id=&quot;16&quot; data-parent=&quot;15&quot; data-level=&quot;3&quot;&gt;
         &lt;td data-column=&quot;name&quot;&gt;Data 4.2&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr data-id=&quot;17&quot; data-parent=&quot;16&quot; data-level=&quot;4&quot;&gt;
         &lt;td data-column=&quot;name&quot;&gt;Data 4.3&lt;/td&gt;
      &lt;/tr&gt;
   &lt;/tbody&gt;
&lt;/table&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
                     <div class="table-responsive">
                        <table id="tree-table-3" class="table table-bordered iq-bg-primary  tree">
                           <thead class="bg-primary">
                              <tr>
                                 <th>Demo 3</th>
                              </tr>
                           </thead>
                            <TreeView
                              :isOpened="true"
                              :item="treeData"
                            />
                        </table>
                     </div>
                  </template>
               </card>
            </b-col>
            <b-col lg="6">
               <card class="card-block card-stretch card-height">
                  <template v-slot:headerTitle>
                        <h4 class="card-title">Avatar Sizing</h4>
                     </template>
                  <template v-slot:headerAction>
                       <a class="text-primary float-right" v-b-toggle.collapse-4 role="button">
                         <i class="ri-code-s-slash-line" />
                       </a>
                     </template>
                  <template v-slot:body>
                     <b-collapse id="collapse-4" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;table id=&quot;tree-table-4&quot; class=&quot;table table-bordered iq-bg-success  tree&quot;&gt;
&lt;thead class=&quot;bg-success&quot;&gt;
   &lt;tr&gt;
      &lt;th&gt;Demo 4&lt;/th&gt;
   &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
   &lt;tr data-id=&quot;1&quot; data-parent=&quot;0&quot; data-level=&quot;1&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 1&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;2&quot; data-parent=&quot;1&quot; data-level=&quot;2&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 1.1&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;3&quot; data-parent=&quot;2&quot; data-level=&quot;3&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 1.2&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;4&quot; data-parent=&quot;3&quot; data-level=&quot;4&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 1.3&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;6&quot; data-parent=&quot;0&quot; data-level=&quot;1&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 2&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;7&quot; data-parent=&quot;6&quot; data-level=&quot;2&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 2.1&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;8&quot; data-parent=&quot;7&quot; data-level=&quot;3&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 2.2&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;9&quot; data-parent=&quot;8&quot; data-level=&quot;4&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 2.3&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;10&quot; data-parent=&quot;0&quot; data-level=&quot;1&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 3&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;11&quot; data-parent=&quot;10&quot; data-level=&quot;2&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 3.1&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;12&quot; data-parent=&quot;11&quot; data-level=&quot;3&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 3.2&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;13&quot; data-parent=&quot;12&quot; data-level=&quot;4&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 3.3&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;14&quot; data-parent=&quot;0&quot; data-level=&quot;1&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 4&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;15&quot; data-parent=&quot;14&quot; data-level=&quot;2&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 4.1&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;16&quot; data-parent=&quot;15&quot; data-level=&quot;3&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 4.2&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr data-id=&quot;17&quot; data-parent=&quot;16&quot; data-level=&quot;4&quot;&gt;
      &lt;td data-column=&quot;name&quot;&gt;Data 4.3&lt;/td&gt;
   &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
                     <div class="table-responsive">
                        <table id="tree-table-4" class="table table-bordered iq-bg-success  tree">
                           <thead class="bg-success">
                              <tr>
                                 <th>Demo 4</th>
                              </tr>
                           </thead>
                             <TreeView
                              :isOpened="true"
                              :item="treeData"
                            />
                        </table>
                     </div>
                 </template>
               </card>
            </b-col>
         </b-row>
     </b-container>
</template>
<script>
import TreeView from '../../../components/tabletree/TableTreeView'
export default {
   name:'TableTree',
   components:{
      TreeView
   },
   data () {
    return {
       treeData:{
          name: 'Data',
          children: [
            {
               name: 'Data1',
               children: [
                  {
                     name: 'Data1.1',
                     children: [
                     {
                        name: 'Data1.2',
                        children: [{
                           name: 'Data1.3'
                        }]
                     }
                     ]
                  }
               ],
            },
            {
               name: 'Data2',
               children: [
                  {
                     name: 'Data2.1',
                     children: [
                     {
                        name: 'Data2.2',
                        children: [{
                           name: 'Data2.3'
                        }]
                     }
                     ]
                  }
               ],
            },
            {
               name: 'Data3',
               children: [
                  {
                     name: 'Data3.1',
                     children: [
                     {
                        name: 'Data3.2',
                        children: [{
                           name: 'Data3.3'
                        }]
                     }
                     ]
                  }
               ],
            },
            {
               name: 'Data4',
               children: [
                  {
                     name: 'Data4.1',
                     children: [
                     {
                        name: 'Data4.2',
                        children: [{
                           name: 'Data4.3'
                        }]
                     }
                     ]
                  }
               ],
            }
         ]
      }
    } 
  }
}
</script>
<style>
</style>