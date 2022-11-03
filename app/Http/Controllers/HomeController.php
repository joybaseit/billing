<?php

namespace App\Http\Controllers;
use App\Models\Colour;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Billing;
use App\Models\OrderProducts;
use DataTables;
use PDF;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        
        return view('home');
    }
    public function new_bill()
    {
        $data = Products::select('id','product_name')->get();
        $data1 = Colour::select('colour_name')->get();
        return view('new_bill')->with(compact('data','data1'));
    }
    public function store(Request $request)
    {   
        
  
        $id = auth()->user()->id;
        $data = new Billing();
        $data->customer_name = $request->input('customer_name');
        $data->address = $request->input('address');
        $data->order_no = $request->input('order_no');
        $data->style_no = $request->input('style_no');
        $data->design_no = $request->input('design_no');
        $data->stich = $request->input('stich');
        $data->colour_name = $request->input('colour_name');
        $data->unit_name = $request->input('unit_name');
        $data->user_id = $id;
        $data->total_order = 4657.00;
        $data->total_order_usd = 5687.90;
        $data->save();
        
        $order_id = $data->id;
       
        $mycheckbox = $request->mycheckbox;
       if ($mycheckbox == "0") {
        $products_id =$request->products_id;
        $price =  $request->price;
        $qty = $request->qty;
        $linetotal = $request->linetotal;
        

          
        for($i=0;$i<count($qty);$i++)
        {   
           
            $list =[
            'products_id' =>  $products_id[$i],
            'price' =>  $price[$i],
            'qty' => $qty[$i],
            'total_bdt' =>$linetotal[$i],
            'total_usd' =>$linetotal[$i],
            'billings_id' => $order_id,
            ];
        
           DB::table('order_products')->insert($list);
        }
    }
        else {
         
         $products_id1 =$request->products_id1;
         $price1 =  $request->price1;
         $qty1 = $request->qty1;
         $linetotal1 = $request->linetotal1;
         
 
           
         for($i=0;$i<count($qty1);$i++)
         {   
            
             $list =[
             'products_id' =>  $products_id1[$i],
             'price' =>  $price1[$i],
             'qty' => $qty1[$i],
             'total_bdt' =>$linetotal1[$i],
             'total_usd' =>$linetotal1[$i],
             'billings_id' => $order_id,
             ];
         
            DB::table('order_products')->insert($list);
          }
        }

        return redirect('/newbill')->with(['success_add' => 'This is a success alert. !']);
        

    }

    public function list (Request $request)
    {
        if($request->ajax())
        {
            $data = Billing::latest();
            return Datatables::of($data)

                ->addIndexColumn()

                ->addColumn('action', function($row){
                    $actionBtn = '
                                   
                                    <a class="btn btn-primary"  href="'. route('bill.pdf', $row->id) .'"> pdf </a>
                              ';              
                            return $actionBtn;
                })
                ->addColumn('type', function($row){

                    if($row->user_id == 1)
                    {
                        return '<small>Print</small>';
                    }
                    else if ($row->user_id == 2)
                    {
                        return '<small>Embroidery</small>';
                    }
                    
                })
                ->rawColumns(['action','type'])
                ->make(true);
            }
            
        return view('list');
    }

    public function downloadPDF($id){

         
        $show = Billing::where('id',$id)->first();
        $show1 = OrderProducts::where('billings_id',$show->id)->get();
        $pdf = PDF::loadView('pdf', compact('show','show1'));
        return $pdf->download('bill.pdf');
        
    }
}
