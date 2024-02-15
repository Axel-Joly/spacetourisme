

            @foreach($list as $item)
                
                <li class='bg-lightB/40 p-5 flex flex-row gap-10 border-b justify-between '>
                <p class='font-bellefair text-2xl uppercase'>{{$item->name}}</p>
                <div class='flex gap-3 justify-end font-barlowC '>
                    <a href={{route($page.'.view')}} class=' text-center pt-1 bg-darkB/40 rounded border w-20 uppercase'>".__('view')."</a>
                    <a href={{route($page.'.edit')}} class=' text-center pt-1 bg-darkB/40 rounded border w-20 uppercase'>".__('edit')."</a>
                    <a href={{route($page.'.delete')}} class=' text-center pt-1 bg-darkB/40 rounded border w-20 uppercase'>".__('delete')."</a>
                </div></li>";     
            @endforeach