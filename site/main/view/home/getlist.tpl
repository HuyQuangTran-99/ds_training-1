<body class="body">
   <h1 class="heading_title">Danh sách tin</h1>
    <label>Phan Loai Theo Danh Muc: <span></span> </label>
       <select id="taxonomy_id" class="taxonomy" onchange="changeLink(this.value)" >
	       {foreach from=$sr item=i}
         <option value="{$i.id}">{$i.name}</option>
	       {/foreach}
      </select>
      <script>
        function changeLink(id) {

					// location.href = '?mod=home&site=getlist&taxonomy_id=' + id;
           location.href = '?mod=home&site=getlist&taxonomy_id=' + id;
				}

      </script>

     <br><br>
		 <label>Chi tiet tin</label>
		 <div class="table">
		 	 <table class="table_List" id="table">
		 	   <thead>
		 	     <tr>
		 	       <th width="3%">ID</th>
						 <th width="27%">Title</th>
						 <th width="5%">Category</th>
						 <th width="5%">Type</th>
						 <th width="60%">Content</th>
		 	     </tr>
		 	   </thead>
		 	   <tbody>
					 {foreach from=$get item=item}
		 	     <tr>
		 	       <td>{$item.id}</td>
						 <td>{$item.title}</td>
						 <td>{$item.taxonomy_id}</td>
						 <td>{$item.type}</td>
						 <td>{$item.content}</td>
		 	     </tr>
					 {/foreach}
		 	   </tbody>
		 	 </table>
		 </div>


</body>
