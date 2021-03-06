/*
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. <p>This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you can see and try actual API calls to manage User Accounts, Meetings, and Recordings, pull Analytical Data and Current State information.</p>    <nosdk> <hr> <div> <div class=\"key\">     <a href=\"./basics.html\" target=\"_\"><img class=\"keyimg\" src=\"./img/bjnmeeting.png\"/></a> </div> <div class=\"keybox\"> Basic instructions about What is a BlueJeans Meeting, and Getting Started Using API's, are <a href=\"./basics.html\" target=\"_blank\">available here <i class=\"glyphicon glyphicon-new-window\"></i></a>. </div> </div> <hr> <alert>2/21/2019</alert> Change response of Change layout and Endpoint API's to 204<br/> 12/03/2018 Add API for setting user profile photograph.<br/> 10/17/2018 Updated API field definitions for time variables to be 64-bit .<br/> 7/23/2018 Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> </nosdk> <hr> 
 *
 * OpenAPI spec version: 1.0.4402212019
 * Contact: glenn@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.bluejeans.api.rest.meetings.model;

import java.util.Objects;
import java.util.Arrays;
import com.bluejeans.api.rest.meetings.model.EndpointsInnerConnections;
import com.google.gson.TypeAdapter;
import com.google.gson.annotations.JsonAdapter;
import com.google.gson.annotations.SerializedName;
import com.google.gson.stream.JsonReader;
import com.google.gson.stream.JsonWriter;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

/**
 * EndpointsInner
 */

public class EndpointsInner {
  @SerializedName("meetingid")
  private String meetingid = null;

  @SerializedName("name")
  private String name = null;

  @SerializedName("CallQuality")
  private String callQuality = null;

  @SerializedName("Leader")
  private String leader = null;

  @SerializedName("callguid")
  private String callguid = null;

  @SerializedName("endpoint")
  private String endpoint = null;

  @SerializedName("TalkDetected")
  private String talkDetected = null;

  @SerializedName("SecureCall")
  private String secureCall = null;

  @SerializedName("Layout")
  private String layout = null;

  @SerializedName("SubLayout")
  private String subLayout = null;

  @SerializedName("VideoRecv")
  private String videoRecv = null;

  @SerializedName("VideoRecvLocalMute")
  private String videoRecvLocalMute = null;

  @SerializedName("VideoRecvRemoteMute")
  private String videoRecvRemoteMute = null;

  @SerializedName("AudioRecv")
  private String audioRecv = null;

  @SerializedName("AudioRecvLocalMute")
  private String audioRecvLocalMute = null;

  @SerializedName("AudioRecvRemoteMute")
  private String audioRecvRemoteMute = null;

  @SerializedName("AudioRecvCodec")
  private String audioRecvCodec = null;

  @SerializedName("AudioSendCodec")
  private String audioSendCodec = null;

  @SerializedName("VideoRecvCodec")
  private String videoRecvCodec = null;

  @SerializedName("VideoRecvHeight")
  private String videoRecvHeight = null;

  @SerializedName("VideoRecvWidth")
  private String videoRecvWidth = null;

  @SerializedName("VideoSendCodec")
  private String videoSendCodec = null;

  @SerializedName("VideoSendHeight")
  private String videoSendHeight = null;

  @SerializedName("VideoSendWidth")
  private String videoSendWidth = null;

  @SerializedName("visibility")
  private String visibility = null;

  @SerializedName("chatEndpointGuid")
  private String chatEndpointGuid = null;

  @SerializedName("endpointGuid")
  private String endpointGuid = null;

  @SerializedName("RDCVersion")
  private String rdCVersion = null;

  @SerializedName("RDCControllerCapable")
  private String rdCControllerCapable = null;

  @SerializedName("RDCControlleeCapable")
  private String rdCControlleeCapable = null;

  @SerializedName("connections")
  private List<EndpointsInnerConnections> connections = null;

  public EndpointsInner meetingid(String meetingid) {
    this.meetingid = meetingid;
    return this;
  }

   /**
   * Get meetingid
   * @return meetingid
  **/
  @ApiModelProperty(value = "")
  public String getMeetingid() {
    return meetingid;
  }

  public void setMeetingid(String meetingid) {
    this.meetingid = meetingid;
  }

  public EndpointsInner name(String name) {
    this.name = name;
    return this;
  }

   /**
   * Get name
   * @return name
  **/
  @ApiModelProperty(value = "")
  public String getName() {
    return name;
  }

  public void setName(String name) {
    this.name = name;
  }

  public EndpointsInner callQuality(String callQuality) {
    this.callQuality = callQuality;
    return this;
  }

   /**
   * Get callQuality
   * @return callQuality
  **/
  @ApiModelProperty(value = "")
  public String getCallQuality() {
    return callQuality;
  }

  public void setCallQuality(String callQuality) {
    this.callQuality = callQuality;
  }

  public EndpointsInner leader(String leader) {
    this.leader = leader;
    return this;
  }

   /**
   * Get leader
   * @return leader
  **/
  @ApiModelProperty(value = "")
  public String getLeader() {
    return leader;
  }

  public void setLeader(String leader) {
    this.leader = leader;
  }

  public EndpointsInner callguid(String callguid) {
    this.callguid = callguid;
    return this;
  }

   /**
   * Get callguid
   * @return callguid
  **/
  @ApiModelProperty(value = "")
  public String getCallguid() {
    return callguid;
  }

  public void setCallguid(String callguid) {
    this.callguid = callguid;
  }

  public EndpointsInner endpoint(String endpoint) {
    this.endpoint = endpoint;
    return this;
  }

   /**
   * Get endpoint
   * @return endpoint
  **/
  @ApiModelProperty(value = "")
  public String getEndpoint() {
    return endpoint;
  }

  public void setEndpoint(String endpoint) {
    this.endpoint = endpoint;
  }

  public EndpointsInner talkDetected(String talkDetected) {
    this.talkDetected = talkDetected;
    return this;
  }

   /**
   * Get talkDetected
   * @return talkDetected
  **/
  @ApiModelProperty(value = "")
  public String getTalkDetected() {
    return talkDetected;
  }

  public void setTalkDetected(String talkDetected) {
    this.talkDetected = talkDetected;
  }

  public EndpointsInner secureCall(String secureCall) {
    this.secureCall = secureCall;
    return this;
  }

   /**
   * Get secureCall
   * @return secureCall
  **/
  @ApiModelProperty(value = "")
  public String getSecureCall() {
    return secureCall;
  }

  public void setSecureCall(String secureCall) {
    this.secureCall = secureCall;
  }

  public EndpointsInner layout(String layout) {
    this.layout = layout;
    return this;
  }

   /**
   * Get layout
   * @return layout
  **/
  @ApiModelProperty(value = "")
  public String getLayout() {
    return layout;
  }

  public void setLayout(String layout) {
    this.layout = layout;
  }

  public EndpointsInner subLayout(String subLayout) {
    this.subLayout = subLayout;
    return this;
  }

   /**
   * Get subLayout
   * @return subLayout
  **/
  @ApiModelProperty(value = "")
  public String getSubLayout() {
    return subLayout;
  }

  public void setSubLayout(String subLayout) {
    this.subLayout = subLayout;
  }

  public EndpointsInner videoRecv(String videoRecv) {
    this.videoRecv = videoRecv;
    return this;
  }

   /**
   * Get videoRecv
   * @return videoRecv
  **/
  @ApiModelProperty(value = "")
  public String getVideoRecv() {
    return videoRecv;
  }

  public void setVideoRecv(String videoRecv) {
    this.videoRecv = videoRecv;
  }

  public EndpointsInner videoRecvLocalMute(String videoRecvLocalMute) {
    this.videoRecvLocalMute = videoRecvLocalMute;
    return this;
  }

   /**
   * Get videoRecvLocalMute
   * @return videoRecvLocalMute
  **/
  @ApiModelProperty(value = "")
  public String getVideoRecvLocalMute() {
    return videoRecvLocalMute;
  }

  public void setVideoRecvLocalMute(String videoRecvLocalMute) {
    this.videoRecvLocalMute = videoRecvLocalMute;
  }

  public EndpointsInner videoRecvRemoteMute(String videoRecvRemoteMute) {
    this.videoRecvRemoteMute = videoRecvRemoteMute;
    return this;
  }

   /**
   * Get videoRecvRemoteMute
   * @return videoRecvRemoteMute
  **/
  @ApiModelProperty(value = "")
  public String getVideoRecvRemoteMute() {
    return videoRecvRemoteMute;
  }

  public void setVideoRecvRemoteMute(String videoRecvRemoteMute) {
    this.videoRecvRemoteMute = videoRecvRemoteMute;
  }

  public EndpointsInner audioRecv(String audioRecv) {
    this.audioRecv = audioRecv;
    return this;
  }

   /**
   * Get audioRecv
   * @return audioRecv
  **/
  @ApiModelProperty(value = "")
  public String getAudioRecv() {
    return audioRecv;
  }

  public void setAudioRecv(String audioRecv) {
    this.audioRecv = audioRecv;
  }

  public EndpointsInner audioRecvLocalMute(String audioRecvLocalMute) {
    this.audioRecvLocalMute = audioRecvLocalMute;
    return this;
  }

   /**
   * Get audioRecvLocalMute
   * @return audioRecvLocalMute
  **/
  @ApiModelProperty(value = "")
  public String getAudioRecvLocalMute() {
    return audioRecvLocalMute;
  }

  public void setAudioRecvLocalMute(String audioRecvLocalMute) {
    this.audioRecvLocalMute = audioRecvLocalMute;
  }

  public EndpointsInner audioRecvRemoteMute(String audioRecvRemoteMute) {
    this.audioRecvRemoteMute = audioRecvRemoteMute;
    return this;
  }

   /**
   * Get audioRecvRemoteMute
   * @return audioRecvRemoteMute
  **/
  @ApiModelProperty(value = "")
  public String getAudioRecvRemoteMute() {
    return audioRecvRemoteMute;
  }

  public void setAudioRecvRemoteMute(String audioRecvRemoteMute) {
    this.audioRecvRemoteMute = audioRecvRemoteMute;
  }

  public EndpointsInner audioRecvCodec(String audioRecvCodec) {
    this.audioRecvCodec = audioRecvCodec;
    return this;
  }

   /**
   * Get audioRecvCodec
   * @return audioRecvCodec
  **/
  @ApiModelProperty(value = "")
  public String getAudioRecvCodec() {
    return audioRecvCodec;
  }

  public void setAudioRecvCodec(String audioRecvCodec) {
    this.audioRecvCodec = audioRecvCodec;
  }

  public EndpointsInner audioSendCodec(String audioSendCodec) {
    this.audioSendCodec = audioSendCodec;
    return this;
  }

   /**
   * Get audioSendCodec
   * @return audioSendCodec
  **/
  @ApiModelProperty(value = "")
  public String getAudioSendCodec() {
    return audioSendCodec;
  }

  public void setAudioSendCodec(String audioSendCodec) {
    this.audioSendCodec = audioSendCodec;
  }

  public EndpointsInner videoRecvCodec(String videoRecvCodec) {
    this.videoRecvCodec = videoRecvCodec;
    return this;
  }

   /**
   * Get videoRecvCodec
   * @return videoRecvCodec
  **/
  @ApiModelProperty(value = "")
  public String getVideoRecvCodec() {
    return videoRecvCodec;
  }

  public void setVideoRecvCodec(String videoRecvCodec) {
    this.videoRecvCodec = videoRecvCodec;
  }

  public EndpointsInner videoRecvHeight(String videoRecvHeight) {
    this.videoRecvHeight = videoRecvHeight;
    return this;
  }

   /**
   * Get videoRecvHeight
   * @return videoRecvHeight
  **/
  @ApiModelProperty(value = "")
  public String getVideoRecvHeight() {
    return videoRecvHeight;
  }

  public void setVideoRecvHeight(String videoRecvHeight) {
    this.videoRecvHeight = videoRecvHeight;
  }

  public EndpointsInner videoRecvWidth(String videoRecvWidth) {
    this.videoRecvWidth = videoRecvWidth;
    return this;
  }

   /**
   * Get videoRecvWidth
   * @return videoRecvWidth
  **/
  @ApiModelProperty(value = "")
  public String getVideoRecvWidth() {
    return videoRecvWidth;
  }

  public void setVideoRecvWidth(String videoRecvWidth) {
    this.videoRecvWidth = videoRecvWidth;
  }

  public EndpointsInner videoSendCodec(String videoSendCodec) {
    this.videoSendCodec = videoSendCodec;
    return this;
  }

   /**
   * Get videoSendCodec
   * @return videoSendCodec
  **/
  @ApiModelProperty(value = "")
  public String getVideoSendCodec() {
    return videoSendCodec;
  }

  public void setVideoSendCodec(String videoSendCodec) {
    this.videoSendCodec = videoSendCodec;
  }

  public EndpointsInner videoSendHeight(String videoSendHeight) {
    this.videoSendHeight = videoSendHeight;
    return this;
  }

   /**
   * Get videoSendHeight
   * @return videoSendHeight
  **/
  @ApiModelProperty(value = "")
  public String getVideoSendHeight() {
    return videoSendHeight;
  }

  public void setVideoSendHeight(String videoSendHeight) {
    this.videoSendHeight = videoSendHeight;
  }

  public EndpointsInner videoSendWidth(String videoSendWidth) {
    this.videoSendWidth = videoSendWidth;
    return this;
  }

   /**
   * Get videoSendWidth
   * @return videoSendWidth
  **/
  @ApiModelProperty(value = "")
  public String getVideoSendWidth() {
    return videoSendWidth;
  }

  public void setVideoSendWidth(String videoSendWidth) {
    this.videoSendWidth = videoSendWidth;
  }

  public EndpointsInner visibility(String visibility) {
    this.visibility = visibility;
    return this;
  }

   /**
   * Get visibility
   * @return visibility
  **/
  @ApiModelProperty(value = "")
  public String getVisibility() {
    return visibility;
  }

  public void setVisibility(String visibility) {
    this.visibility = visibility;
  }

  public EndpointsInner chatEndpointGuid(String chatEndpointGuid) {
    this.chatEndpointGuid = chatEndpointGuid;
    return this;
  }

   /**
   * Get chatEndpointGuid
   * @return chatEndpointGuid
  **/
  @ApiModelProperty(value = "")
  public String getChatEndpointGuid() {
    return chatEndpointGuid;
  }

  public void setChatEndpointGuid(String chatEndpointGuid) {
    this.chatEndpointGuid = chatEndpointGuid;
  }

  public EndpointsInner endpointGuid(String endpointGuid) {
    this.endpointGuid = endpointGuid;
    return this;
  }

   /**
   * Get endpointGuid
   * @return endpointGuid
  **/
  @ApiModelProperty(value = "")
  public String getEndpointGuid() {
    return endpointGuid;
  }

  public void setEndpointGuid(String endpointGuid) {
    this.endpointGuid = endpointGuid;
  }

  public EndpointsInner rdCVersion(String rdCVersion) {
    this.rdCVersion = rdCVersion;
    return this;
  }

   /**
   * Get rdCVersion
   * @return rdCVersion
  **/
  @ApiModelProperty(value = "")
  public String getRdCVersion() {
    return rdCVersion;
  }

  public void setRdCVersion(String rdCVersion) {
    this.rdCVersion = rdCVersion;
  }

  public EndpointsInner rdCControllerCapable(String rdCControllerCapable) {
    this.rdCControllerCapable = rdCControllerCapable;
    return this;
  }

   /**
   * Get rdCControllerCapable
   * @return rdCControllerCapable
  **/
  @ApiModelProperty(value = "")
  public String getRdCControllerCapable() {
    return rdCControllerCapable;
  }

  public void setRdCControllerCapable(String rdCControllerCapable) {
    this.rdCControllerCapable = rdCControllerCapable;
  }

  public EndpointsInner rdCControlleeCapable(String rdCControlleeCapable) {
    this.rdCControlleeCapable = rdCControlleeCapable;
    return this;
  }

   /**
   * Get rdCControlleeCapable
   * @return rdCControlleeCapable
  **/
  @ApiModelProperty(value = "")
  public String getRdCControlleeCapable() {
    return rdCControlleeCapable;
  }

  public void setRdCControlleeCapable(String rdCControlleeCapable) {
    this.rdCControlleeCapable = rdCControlleeCapable;
  }

  public EndpointsInner connections(List<EndpointsInnerConnections> connections) {
    this.connections = connections;
    return this;
  }

  public EndpointsInner addConnectionsItem(EndpointsInnerConnections connectionsItem) {
    if (this.connections == null) {
      this.connections = new ArrayList<EndpointsInnerConnections>();
    }
    this.connections.add(connectionsItem);
    return this;
  }

   /**
   * Get connections
   * @return connections
  **/
  @ApiModelProperty(value = "")
  public List<EndpointsInnerConnections> getConnections() {
    return connections;
  }

  public void setConnections(List<EndpointsInnerConnections> connections) {
    this.connections = connections;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    EndpointsInner endpointsInner = (EndpointsInner) o;
    return Objects.equals(this.meetingid, endpointsInner.meetingid) &&
        Objects.equals(this.name, endpointsInner.name) &&
        Objects.equals(this.callQuality, endpointsInner.callQuality) &&
        Objects.equals(this.leader, endpointsInner.leader) &&
        Objects.equals(this.callguid, endpointsInner.callguid) &&
        Objects.equals(this.endpoint, endpointsInner.endpoint) &&
        Objects.equals(this.talkDetected, endpointsInner.talkDetected) &&
        Objects.equals(this.secureCall, endpointsInner.secureCall) &&
        Objects.equals(this.layout, endpointsInner.layout) &&
        Objects.equals(this.subLayout, endpointsInner.subLayout) &&
        Objects.equals(this.videoRecv, endpointsInner.videoRecv) &&
        Objects.equals(this.videoRecvLocalMute, endpointsInner.videoRecvLocalMute) &&
        Objects.equals(this.videoRecvRemoteMute, endpointsInner.videoRecvRemoteMute) &&
        Objects.equals(this.audioRecv, endpointsInner.audioRecv) &&
        Objects.equals(this.audioRecvLocalMute, endpointsInner.audioRecvLocalMute) &&
        Objects.equals(this.audioRecvRemoteMute, endpointsInner.audioRecvRemoteMute) &&
        Objects.equals(this.audioRecvCodec, endpointsInner.audioRecvCodec) &&
        Objects.equals(this.audioSendCodec, endpointsInner.audioSendCodec) &&
        Objects.equals(this.videoRecvCodec, endpointsInner.videoRecvCodec) &&
        Objects.equals(this.videoRecvHeight, endpointsInner.videoRecvHeight) &&
        Objects.equals(this.videoRecvWidth, endpointsInner.videoRecvWidth) &&
        Objects.equals(this.videoSendCodec, endpointsInner.videoSendCodec) &&
        Objects.equals(this.videoSendHeight, endpointsInner.videoSendHeight) &&
        Objects.equals(this.videoSendWidth, endpointsInner.videoSendWidth) &&
        Objects.equals(this.visibility, endpointsInner.visibility) &&
        Objects.equals(this.chatEndpointGuid, endpointsInner.chatEndpointGuid) &&
        Objects.equals(this.endpointGuid, endpointsInner.endpointGuid) &&
        Objects.equals(this.rdCVersion, endpointsInner.rdCVersion) &&
        Objects.equals(this.rdCControllerCapable, endpointsInner.rdCControllerCapable) &&
        Objects.equals(this.rdCControlleeCapable, endpointsInner.rdCControlleeCapable) &&
        Objects.equals(this.connections, endpointsInner.connections);
  }

  @Override
  public int hashCode() {
    return Objects.hash(meetingid, name, callQuality, leader, callguid, endpoint, talkDetected, secureCall, layout, subLayout, videoRecv, videoRecvLocalMute, videoRecvRemoteMute, audioRecv, audioRecvLocalMute, audioRecvRemoteMute, audioRecvCodec, audioSendCodec, videoRecvCodec, videoRecvHeight, videoRecvWidth, videoSendCodec, videoSendHeight, videoSendWidth, visibility, chatEndpointGuid, endpointGuid, rdCVersion, rdCControllerCapable, rdCControlleeCapable, connections);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class EndpointsInner {\n");
    
    sb.append("    meetingid: ").append(toIndentedString(meetingid)).append("\n");
    sb.append("    name: ").append(toIndentedString(name)).append("\n");
    sb.append("    callQuality: ").append(toIndentedString(callQuality)).append("\n");
    sb.append("    leader: ").append(toIndentedString(leader)).append("\n");
    sb.append("    callguid: ").append(toIndentedString(callguid)).append("\n");
    sb.append("    endpoint: ").append(toIndentedString(endpoint)).append("\n");
    sb.append("    talkDetected: ").append(toIndentedString(talkDetected)).append("\n");
    sb.append("    secureCall: ").append(toIndentedString(secureCall)).append("\n");
    sb.append("    layout: ").append(toIndentedString(layout)).append("\n");
    sb.append("    subLayout: ").append(toIndentedString(subLayout)).append("\n");
    sb.append("    videoRecv: ").append(toIndentedString(videoRecv)).append("\n");
    sb.append("    videoRecvLocalMute: ").append(toIndentedString(videoRecvLocalMute)).append("\n");
    sb.append("    videoRecvRemoteMute: ").append(toIndentedString(videoRecvRemoteMute)).append("\n");
    sb.append("    audioRecv: ").append(toIndentedString(audioRecv)).append("\n");
    sb.append("    audioRecvLocalMute: ").append(toIndentedString(audioRecvLocalMute)).append("\n");
    sb.append("    audioRecvRemoteMute: ").append(toIndentedString(audioRecvRemoteMute)).append("\n");
    sb.append("    audioRecvCodec: ").append(toIndentedString(audioRecvCodec)).append("\n");
    sb.append("    audioSendCodec: ").append(toIndentedString(audioSendCodec)).append("\n");
    sb.append("    videoRecvCodec: ").append(toIndentedString(videoRecvCodec)).append("\n");
    sb.append("    videoRecvHeight: ").append(toIndentedString(videoRecvHeight)).append("\n");
    sb.append("    videoRecvWidth: ").append(toIndentedString(videoRecvWidth)).append("\n");
    sb.append("    videoSendCodec: ").append(toIndentedString(videoSendCodec)).append("\n");
    sb.append("    videoSendHeight: ").append(toIndentedString(videoSendHeight)).append("\n");
    sb.append("    videoSendWidth: ").append(toIndentedString(videoSendWidth)).append("\n");
    sb.append("    visibility: ").append(toIndentedString(visibility)).append("\n");
    sb.append("    chatEndpointGuid: ").append(toIndentedString(chatEndpointGuid)).append("\n");
    sb.append("    endpointGuid: ").append(toIndentedString(endpointGuid)).append("\n");
    sb.append("    rdCVersion: ").append(toIndentedString(rdCVersion)).append("\n");
    sb.append("    rdCControllerCapable: ").append(toIndentedString(rdCControllerCapable)).append("\n");
    sb.append("    rdCControlleeCapable: ").append(toIndentedString(rdCControlleeCapable)).append("\n");
    sb.append("    connections: ").append(toIndentedString(connections)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }

}

