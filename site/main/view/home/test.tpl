

<div id="demoTest">
   <h1>Test demo</h1>
   <tbody>
     {foreach from=$posts  item=item}
      <tr>
         <td>{$item.title}</td>
         <td>{$item.name}</td>
      </tr>
     {/foreach}
   </tbody>

</div>
