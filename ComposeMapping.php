<?php

$mappings = array(
	"add-host" => array("type" => "array", "function" => "extra_hosts"),
	"cap-add" => array("type" => "array", "function" => "cap_add"),
	"cap-drop" => array("type" => "array", "function" => "cap_drop"),
	"cgroup-parent" => array("type" => "value", "function" => "cgroup_parent"),
	"device" => array("type" => "array", "function" => "devices"),
	"dns" => array("type" => "array", "function" => "dns"),
	"dns_search" => array("type" => "array", "function" => "dns_search"),
	"env_file" => array("type" => "array", "function" => "env_file"),
	"expose" => array("type" => "array", "function" => "expose"),
	"label" => array("type" => "array", "function" => "labels"),
	"link" => array("type" => "array", "function" => "links"),
	"log-driver" => array("type" => "value", "function" => "logging/driver"),
	"log-opt" => array("type" => "keyvalue", "function" => "logging/options"),
	"entrypoint" => array("type" => "array", "function" => "entrypoint"),
	"env" => array("type" => "array", "function" => "environment"),
	"name" => array("type" => "value", "function" => "container_name"),
	"network" => array("type" => "value", "function" => "network_mode"),
	"pid" => array("type" => "value", "function" => "pid"),
	"privileged" => array("type" => "switch", "function" => "privileged"),
	"publish" => array("type" => "array", "function" => "ports"),
	"read-only" => array("type" => "switch", "function" => "read_only"),
	"restart" => array("type" => "value", "function" => "restart"),
	"tmpfs" => array("type" => "value", "function" => "tmpfs"),
	"ulimit" => array("type" => "ulimit", "function" => "ulimits"),
	"volume" => array("type" => "array", "function" => "volumes"),
	"mount" => array("type" => "bindmount", "function" => "volumes"),
	"image" => array("type" => "value", "function" => "image"),
	"command" => array("type" => "value", "function" => "command"),
	"workdir" => array("type" => "value", "function" => "working_dir"),
	"security-opt" => array("type" => "array", "function" => "security_opt"),
	"user" => array("type" => "value", "function" => "user"),
	"pull" => array("type" => "value", "function" => "pull_policy"),
	"hostname" => array("type" => "value", "function" => "hostname"),
	"gpus" => array("type" => "gpus", "function" => "deploy/resources/reservations/devices"),
	"init" => array("type" => "switch", "function"=>"init"),
	"platform" => array("type" => "value", "function" => "platform"),
);

$mappings["h"] = $mappings["hostname"];
$mappings["u"] = $mappings["user"];
$mappings["v"] = $mappings["volume"];
$mappings["l"] = $mappings["label"];
$mappings["p"] = $mappings["publish"];
$mappings["e"] = $mappings["env"];
$mappings["w"] = $mappings["workdir"];
$mappings["net"] = $mappings["network"]; 
