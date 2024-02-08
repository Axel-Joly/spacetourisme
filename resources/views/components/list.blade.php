<?php 

            foreach($list as $item){
                echo "<li class='bg-lightB/40 p-5 flex flex-row gap-10 border-b justify-between '><p class='font-bellefair text-2xl uppercase'>".__($item->name)."</p><div class='flex gap-3 justify-end font-barlowC '><input class='bg-darkB/40 rounded border w-20 uppercase' type='button' value=".__('view')."><input class='bg-darkB/40 rounded border w-20 uppercase' type='button' value=".__('edit')."><input class='w-20 bg-darkB/40 rounded border uppercase' type='button' value=".__('delete')."></div></li>";     
            }