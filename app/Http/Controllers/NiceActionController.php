<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NiceAction;

class NiceActionController extends controller{
    
    public function getHome(){
        $actions = NiceAction::all();
        //print_r($actions);exit;
        return view('actions.controllerintro.home', ['actions' => $actions] );
    }


    public function getNiceAction($action,$name=null){
        return view('actions.controllerintro.'.$action,['name'=>$name]);
    }
    
    public function postNiceAction(Request $request){
        $this->validate($request,[
            'action' => 'required',
            'name'=>'required|alpha'
        ]);
        return view('actions.controllerintro.niceform',['action'=>$request['action'],'name'=>$this->transfromName($request['name'])]);
    }
    
    private function transfromName($name){
        $prefix = 'KING ';
        return $prefix.strtoupper($name);
    }
}
